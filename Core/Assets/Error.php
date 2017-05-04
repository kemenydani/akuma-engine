<?php
namespace Core\Assets;

class Error {

   public $Config;
   public $Options = [];
   public $ErrorArray = [];

   public function checkErrors($data){
      
      if(isset($this->Options['filter'])){
         foreach($this->Options['filter'] as $key => $value){
            $fields = $this->getFieldsWithFilter($value); //['username' => 15]
            var_dump($fields);
            //$this->checkMax($fields[key($fields)], $data);
         }
         /*
         foreach($this->Options['filter'] as $key => $value){
            $fields[$value] = $this->getFieldsWithFilter($value); //['username' => 15]
         }

         foreach($fields[\key($fields)] as $key => $value){
            \call_user_func_array([$this, 'checkMax'], [$value, [$key => $data[$key]]]);
         }
         */
      } else {
         
      }

   }
   
   public function checkMax($max, $data){

      if(strlen($data[\key($data)]) > $max){
         array_push($this->ErrorArray, [\key($data) => 'You entered more than '.$max.' characters.']);
      }  

   }
   
   public function getFieldsWithFilter($filter){
      
      foreach($this->Config as $key => $value){
         if(\array_key_exists($filter, $this->Config[$key])){
            
            $fields[$key] = $value[$filter];
         }
      }
      return $fields; //['username' => 15]
   }
   
}

