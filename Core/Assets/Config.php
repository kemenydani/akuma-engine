<?php
namespace Core\Assets;

class Config {
  
   public function getConfig($string){
      return include ''.\Core\MVC::$configDir.'/'.$string.'.php';
   }

   public function getMaxFilter(){
      
   }
   
}
