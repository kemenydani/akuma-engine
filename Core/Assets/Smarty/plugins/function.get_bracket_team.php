<?php

function smarty_function_get_bracket_team($params){
   global $db;

   //matches=$item.matches bracket_level='upper' position='team1' round_id=$round_number round_match_id=$match_id

    foreach($params['matches'] as $match){
         if($match['bracket_level'] == $params['bracket_level'] && $match['round_id'] == $params['round_id'] && $match['round_match_id'] == $params['round_match_id']){
             $team_id = $match[$params['position']];
         }
    }
    
    if($team_id){
        $result1 = $db->query("SELECT full_name, team_id, country FROM xyz_coverage_teams WHERE team_id = '".$team_id."' LIMIT 1");
        $u = $result1->fetch(\PDO::FETCH_ASSOC);
        if(file_exists('flags/'.strtolower($u['country']).'.png')){
            $flag = '<img style="margin-right: 2px; margin-left: 2px; float: left; margin-top: 8px;" src='.BASE.'flags/'.strtolower($u['country']).'.png'.'>';
        }
        
        return $flag.$u['full_name'];
    } else {
        return "n/a";
    }
  
}
