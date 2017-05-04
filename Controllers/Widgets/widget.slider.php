<?php
function widget_slider($params) {
	global $db, $Smarty;
        
	$result = $db->query("SELECT * FROM ".DBPREFIX."_news WHERE featured = 1 AND active = 1 ORDER BY news_id DESC LIMIT ".$params['limit']."");
        $items = $result->fetchAll(\PDO::FETCH_ASSOC);

	foreach ($params as $key => &$val)
		 $Smarty->assign($key, $val); 	
	
	$Smarty->assign("slider_items",$items);
/*
	if ($params['template'])
		return $Smarty->fetch($params['template']);
	else */
	return $Smarty->fetch($params['dir'] . '/' . "widget.slider2.tpl");
}