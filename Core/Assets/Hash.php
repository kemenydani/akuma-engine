<?php
namespace Core\Assets;

class Hash {
   
   public static function create($password){
      
      $options = [
         'cost' => 12,
      ];
      
      return password_hash($password, PASSWORD_BCRYPT, $options);
      
   }
   
   public static function check($password, $hash){
      return password_verify($password, $hash);
   }
   
}
