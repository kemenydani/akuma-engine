<?php
namespace Core;

class MVC {
    /**
     * Alap Controller
     * @var string
     */
    public static $defaultController;
    
    /**
     * Alap Metódus
     * @var string
     */
    public static $defaultMethod;
    
    /**
     * Controllerek könyvtára
     * @var string
     */
    public static $controllerDir;
    public static $configDir;
    
    /**
     * Maximum elemszám amit az URL-be / jellel elválasztva be lehet írni
     * @var integer
     */
    public static $maxUrlElements;

    /**
     * Az url elemeiből készült tömb
     * @var array
     */
    private $URLArray;
    
    /**
     * ontroller Objektum
     * @var Object Controller
     */
    public $Controller;
    public $table;
    /**
     * Metódus
     * @var string
     */
    public $Method;
    /**
     * !!!Összefoglaló hiányzik.
     * @
     * @param string $url
     */
    public function MVCStart($url){
        $this->Controller = '\\' . self::$controllerDir . '\\' . $this->getController($url) . '';
        $this->Controller = new $this->Controller;
        $this->setMethod();
        $this->setParams();
        \call_user_func([$this->Controller, $this->Method]);
    }

    /**
     * Beállítja a Controller Objektumot
     * Ha az URLArray Tömb első értéke egy létező Controller, akkor ezt használja, ellenkező esetben az alap Controllert.
     * @param string $url
     * @return string
     * @group Controller handler
     */
    private function getController($url){
        $this->URLArray = \array_slice(\explode('/', \filter_var(\rtrim($url, '/'), \FILTER_SANITIZE_URL)),0,self::$maxUrlElements);
        if(isset($this->URLArray) && \file_exists(self::$controllerDir.'/'.\ucfirst($this->URLArray[0]).'.php')) {
            $this->table = $this->URLArray[0];
            $this->ControllerName = \ucfirst($this->URLArray[0]);
            $this->Controller = $this->ControllerName;
            unset($this->URLArray[0]);
            return $this->Controller;
        } else {
            return \ucfirst(self::$defaultController);
        }  
    }

    /**
     * Beállítja a Controller Objektum paramétereit
     * @param array $params
     * @group Parameter handler
     */
    private function setParams(){
    
        if(isset($this->URLArray)){

            foreach($this->URLArray as $value){
                
                $this->params[] = $value;
                
            }
         
            $this->Controller->params = $this->params;
            unset($this->URLArray);
           
        }
       
    }
    
    /**
     * Ha az URLArray TÖMB 1. indexelt eleme egy léterő metódus a Controller objektumban akkor azt használjuk
     * Ha nem akkor beállítja az alap metódust
     * @group Method handler
     */
    private function setMethod(){
        if(isset($this->URLArray)){
            if(\method_exists($this->Controller, $this->URLArray[1])){
               $this->Method = $this->URLArray[1];
               unset($this->URLArray[1]);
            } else {
               $this->Method = self::$defaultMethod; 
            } 
        } 
    }
} 