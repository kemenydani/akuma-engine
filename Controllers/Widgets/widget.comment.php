<?php
function widget_comment($params) {
	global $db, $Smarty;
        
	$result = $db->query("SELECT * FROM ".DBPREFIX."_comment cm LEFT JOIN ".DBPREFIX."_users u ON u.user_id = cm.poster_id WHERE cm.controller = '".$params['controller']."' AND cm.item_id = '".$params['item_id']."' ORDER BY cm.date_posted DESC");
        
        $comments= $result->fetchAll(\PDO::FETCH_ASSOC);

	foreach ($params as $key => &$val)
		 $Smarty->assign($key, $val); 	
	
	$Smarty->assign("comments",$comments);
/*
	if ($params['template'])
		return $Smarty->fetch($params['template']);
	else */
	return $Smarty->fetch($params['dir'] . '/' . "widget.comment.tpl");
}