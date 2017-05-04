<?php
function widget_match($params) {
	global $db, $Smarty;
        
	$category = isset($params['category']) ? "AND category = ".$params['category']."" : "";
	
	$result = $db->query("SELECT * FROM ".DBPREFIX."_matches WHERE active = 1 AND status = 2 {$category} ORDER BY match_id DESC LIMIT ".$params['limit']."");
        $items = $result->fetchAll(\PDO::FETCH_ASSOC);

	foreach ($params as $key => &$val)
		 $Smarty->assign($key, $val); 	
	
	$Smarty->assign("match_items",$items);
/*
	if ($params['template'])
		return $Smarty->fetch($params['template']);
	else */
	return $Smarty->fetch($params['dir'] . '/' . "widget.match.tpl");
}