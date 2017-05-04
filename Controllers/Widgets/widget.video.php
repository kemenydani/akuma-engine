<?php
function widget_video($params) {
	global $db, $Smarty;
        
	$result = $db->query("SELECT * FROM ".DBPREFIX."_video WHERE active = 1 ORDER BY video_id DESC LIMIT ".$params['limit']."");
        $video_items = $result->fetchAll(\PDO::FETCH_ASSOC);
        

	foreach ($params as $key => &$val)
		 $Smarty->assign($key, $val); 	
	
        $Smarty->assign("featured",$featured);
	$Smarty->assign("video_items",$video_items);

	return $Smarty->fetch($params['dir'] . '/' . "widget.video.tpl");
}