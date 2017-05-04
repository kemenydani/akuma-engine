<?php

function smarty_function_team($params){
    global $db;
    
    $result1 = $db->query("SELECT team_name, team_id FROM xyz_teams WHERE team_id = '".$params['team_id']."' LIMIT 1");
    $u = $result1->fetch(\PDO::FETCH_ASSOC);
    
    return "<a href=".BASE."teams/view/".$u['team_id'].">".$u['team_name']."</a>";
    
}
