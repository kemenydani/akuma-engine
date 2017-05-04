<?php
function widget_gallery($params) {
	global $db, $Smarty;
        
	$result = $db->query("SELECT * FROM ".DBPREFIX."_gallery WHERE active = 1 ORDER BY date_posted DESC LIMIT ".$params['limit']."");
        $galleries = $result->fetchAll(\PDO::FETCH_ASSOC);

        
        foreach($galleries as $gallery){
            $images = json_decode($gallery['img_settings'], true);
            
            $folder = slash($gallery['folder']);
            
            $thumb_folder_arr = explode('/', $folder);
            $thumb_folder_arr[0] = 'thumbs';
            $thumb_folder = "";
            
            for($x = 0; $x < count($thumb_folder_arr); $x++){
                $thumb_folder = $thumb_folder . $thumb_folder_arr[$x] . '/';
            }
            
            $gallery['folder'] = $folder;
            $gallery['thumb_folder'] = substr($thumb_folder, 0, -1);
            $gallery['cover_image'] = $images['cover_img'];
            $gallery['highlighted'] = $images['highlighted'];
            
            if(is_file($gallery['thumb_folder'] . '/' . $gallery['cover_image'])){
                $gallery['img']['cover']['thumb'] = $gallery['thumb_folder'] . '/' . $gallery['cover_image'];
                $gallery['img']['cover']['original'] = $gallery['folder'] . '/' . $gallery['cover_image'];
            } else {
                $gallery['img']['cover']['thumb'] = $gallery['folder'] . '/' . $gallery['cover_image'];
                $gallery['img']['cover']['original'] = $gallery['folder'] . '/' . $gallery['cover_image'];
            }
            
            for($i = 0; $i < count($gallery['highlighted']); $i++){
                if(is_file($gallery['thumb_folder'] . '/' . $gallery['highlighted'][$i])){
                    $gallery['img']['highlighted'][$i]['thumb'] = $gallery['thumb_folder'] . '/' . $gallery['highlighted'][$i];
                    $gallery['img']['highlighted'][$i]['original'] = $gallery['folder'] . '/' . $gallery['highlighted'][$i];
                } else {
                    $gallery['img']['highlighted'][$i]['thumb'] = $gallery['folder'] . '/' . $gallery['highlighted'][$i];
                    $gallery['img']['highlighted'][$i]['original'] = $gallery['folder'] . '/' . $gallery['highlighted'][$i];
                } 
            }
            
            $gallery_items[] = $gallery;
        }
        
        
	foreach ($params as $key => &$val)
		 $Smarty->assign($key, $val); 	
	
	$Smarty->assign('galleries', $gallery_items);
	return $Smarty->fetch($params['dir'] . '/' . "widget.gallery.tpl");
}