<?php

namespace Core;

class Config {
    
    public $Config;
    public $Fields;
    public $SearchFields = [];
    
    public function __construct($name) {
        if($name){
            $this->Config = include __ROOT__. '/' . \Core\MVC::$configDir . '/' . $name .'.php';
            //$this->appendDataToFields($this->Config);
            $this->Fields = $this->Config; 
            $this->getSearchFields();
        }
    }
    
    public function loadConfig($name){
        if($name){
            $this->Config = include __ROOT__. '/' . \Core\MVC::$configDir . '/' . $name .'.php';
            $this->appendDataToFields($this->Config['fields']);
            $this->Fields = $this->Config['fields'];
             
            $this->getSearchFields();
        }
    }
    
    public function appendDataToFields(){
       
            if(isset($this->Config['category'])){
                $where = "";
                if(isset($this->Config['category']['group'])){
                    $where = 'WHERE main.category_group = "'.$this->Config['category']['group'].'"';
                }
                $dbo = new \Core\Database('categories');
                $dbo->Sql = 'SELECT main.* FROM '.$dbo->Table.' main ' . $where;
                $dbo->prepare();
                $dbo->execute();
                $items = $dbo->fetchAll();
                
                $categories = [];
                
                foreach($items as $item){
                    $categories[$item['category_name']] = $item['category_id'];
                }
             
                $this->Config['category']['options'] = $categories;
                
            }
        
    }
    
    public function getSearchFields(){
        foreach($this->Fields as $key => $val){
            if(isset($val['search'])){
                
               $this->SearchFields[$key] = $val;
               //unset($this->SearchFields[$key]['search']);
            }
        }
        
        return $this->SearchFields;
  
    }
    
}
