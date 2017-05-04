<?php
function widget_partners($params) {
	global $db, $Smarty;
        
	$limit = isset($params['limit']) ? "LIMIT ".$params['limit']."" : "";
	
	$result = $db->query("SELECT * FROM ".DBPREFIX."_partners {$limit} ORDER BY partner_order ASC");
        $items = $result->fetchAll(\PDO::FETCH_ASSOC);

	foreach ($params as $key => &$val)
		 $Smarty->assign($key, $val); 	
	
	$Smarty->assign("items",$items);
/*
	if ($params['template'])
		return $Smarty->fetch($params['template']);
	else */
	return $Smarty->fetch($params['dir'] . '/' . "widget.partners.tpl");
}