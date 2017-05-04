<?php

function smarty_function_coverage_team($params){
    global $db;
    
    $result1 = $db->query("SELECT full_name, team_id, country FROM xyz_coverage_teams WHERE team_id = ".$params['team_id']." LIMIT 1");
    $u = $result1->fetch(\PDO::FETCH_ASSOC);
    $flag = '<img style="margin-right: 2px; margin-left: 2px; float: left; margin-top: 8px;" src='.BASE.'flags/'.strtolower($u['country']).'.png'.'>';
    return $flag.$u['full_name'];
    
}
