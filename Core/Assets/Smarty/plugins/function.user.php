<?php

function smarty_function_user($params){
    global $db;
    
    $result1 = $db->query("SELECT username, user_id FROM xyz_users WHERE user_id = '".$params['user_id']."' LIMIT 1");
    $u = $result1->fetch(\PDO::FETCH_ASSOC);
    
    return "<a href=".BASE."user/profile/".$u['user_id'].">".$u['username']."</a>";
    
}
