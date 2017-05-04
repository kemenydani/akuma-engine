<?php
namespace Core\Assets\Autoloader;

class AutoLoader {
   private static $namespaces = null;
   
   public static function loader($className) {
      if(self::$namespaces === null) {
         self::$namespaces = include 'registered.php';
      }

      $filename = __ROOT__.'/'.self::searchRegisteredRoute($className).".php";
      if(file_exists($filename)) {
         require_once($filename);
      }
   }
   
   private static function searchRegisteredRoute($className) {
      $array = explode('\\', $className);
      if(array_key_exists($array[0], self::$namespaces)) {
          $tmp = $array[0];
          $array[0] = self::$namespaces[$tmp];
      }

      $route = $array[0];
      for($i = 1; $i < count($array); $i++) {
          $route .='/'.$array[$i];
      }

      return $route;
   }
}

spl_autoload_register('Core\Assets\AutoLoader\AutoLoader::loader');