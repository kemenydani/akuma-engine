<?php

function smarty_function_get_bracket_match_info($params){
   global $db;

   //matches=$item.matches bracket_level='upper' position='team1' round_id=$round_number round_match_id=$match_id
   
    foreach($params['matches'] as $match){
        if($match['bracket_level'] == $params['bracket_level'] && $match['round_id'] == $params['round_id'] && $match['round_match_id'] == $params['round_match_id']){
            if($match['result']){
                $result = json_decode($match['result'], true);
            }
        }
    }
   
    if($result){
       
        $score = "";
        
        foreach($result as $map){
          
                $score = $score.'['.$map['map_name'].' '.$map['team1_score'].'-'.$map['team2_score'].'] ';
          
        }

        return $score;
        
    } else {
        return '';
    }

    
}
