<?php
function widget_newsfeed($params) {
	global $db, $Smarty;
        
        $limit_news = 5;
        $limit_blogs = 4;
        
	$news_result = $db->query("SELECT * FROM ".DBPREFIX."_news WHERE active = 1 ORDER BY news_id DESC LIMIT ".$limit_news."");
        $news = $news_result->fetchAll(\PDO::FETCH_ASSOC);
        $blogs_result = $db->query("SELECT * FROM ".DBPREFIX."_blog WHERE active = 1 ORDER BY blog_id DESC LIMIT ".$limit_blogs."");
        $blogs = $blogs_result->fetchAll(\PDO::FETCH_ASSOC);
        
        if(count($blogs < $limit_blogs)){
           $apple = $limit_blogs - count($blogs);
           $get_more = $limit_news + $apple;
           
           unset($news);
           $news_result_2 = $db->query("SELECT * FROM ".DBPREFIX."_news WHERE active = 1 ORDER BY news_id DESC LIMIT ".$get_more."");
           $news = $news_result_2->fetchAll(\PDO::FETCH_ASSOC);
           
        }
        

        
        $content = [];
        
        foreach($news as $news_item){
            $content[] = [
                'type' => 'news',
                'type_id' => $news_item['news_id'],
                'title' => $news_item['news_title'],
                'content_short' => $news_item['news_quote'],
                'image' => $news_item['news_image'],
                'sponsor_featured' => $news_item['featured_sponsor_post'],
                'date_posted' => $news_item['date_posted']
            ];
        }
        
        foreach($blogs as $blog_item){
            $content[] = [
                'type' => 'blog',
                'type_id' => $blog_item['blog_id'],
                'title' => $blog_item['blog_title'],
                'content_short' => $blog_item['blog_quote'],
                'image' => $blog_item['blog_image'],
                'date_posted' => $blog_item['date_posted']
            ];
        }
        
        function date_compare($a, $b)
        {
            $t1 = strtotime($a['date_posted']);
            $t2 = strtotime($b['date_posted']);
            return $t2 - $t1;
        }    
        usort($content, 'date_compare');
    
	foreach ($params as $key => &$val)
		 $Smarty->assign($key, $val); 	
	
	$Smarty->assign("items",$content);
/*
	if ($params['template'])
		return $Smarty->fetch($params['template']);
	else */
	return $Smarty->fetch($params['dir'] . '/' . "widget.newsfeed.tpl");
}