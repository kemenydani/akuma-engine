<?php

class queryHelper {
   
   public function whereQuery($properties, $alias){
         
         $arr = [];
         $where = "";
         
         foreach ($properties as $key => $value) {
            $arr[] = "$alias.$key='$value'";
         }
         //LOGIC 
         
         if(count($arr) >= 1) {

            $where = "WHERE ".$arr[0];

            for($i = 1; $i < count($arr); $i++){
               $where = $where." AND ".$arr[$i]."";
            }
   
         }
         
         return $where;
         
   }
      
   public function pdoWq($properties, $alias){
      
         $arr = [];
         $bind = [];
         $where = "";
         
         $cleaned = array_filter($properties);
         
         foreach ($cleaned as $key => $value) {
            $arr[] = "$alias.$key = :$key";
            $bind[":".$key] = $value ;
         }

         if(count($arr) >= 1) {
             
            $where = "WHERE ".$arr[0];
            
            for($i = 1; $i < count($arr); $i++){
               $where = $where." AND ".$arr[$i]."";
            }
   
         }
       
         return ['where' => $where, 'bind' => $bind];
         
      }
      
   }
