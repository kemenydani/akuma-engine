<?php
namespace Controllers\Traits;

trait Configure {
   
   private $configArray;
   public $apple;
   
   public function Configure($method){
      
      $this->configArray = include \Core\MVC::$controllerDir.'/'.
                                   \Core\MVC::$configDir.'/'.
                                   (new \ReflectionClass(__CLASS__))->getShortName().'.php';
      
      $this->methodConfig($method);
      
   }

   private function methodConfig($method){
      if(isset($this->configArray[$method])){
         $this->apple = "fine";
         var_dump($this->configArray[$method]);
      }
   }
}
