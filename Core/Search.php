<?php
namespace Core;

class Search {

    public static $column_prefix;
    
    public $search;
    public $whereParamsArray;
    public $orderParamsArray;
    public $like;
    public $order;
    
    public $SqlWhere;
    public $SqlOrder;
    public $GetUrl;
    
    public function detectSearchRequest(){

        if(isset($_GET['search'])){
            
            $this->search = $_GET['search'];

            if(isset($this->search['where'])){
               
               foreach($this->search['where'] as $field_name => $params){
                   if(($params['param']) === ""){
                       unset($this->search['where'][$field_name]);
                   }
               }
               
               $this->whereParamsArray = $this->search['where'];
               $this->createSqlWhere();
               
            }
            if(isset($this->search['order'])){
               
                foreach($this->search['order'] as $field_name => $param){
                    if(empty($param)){
                        unset($this->search['order'][$field_name]);
                    }
                }
               $this->orderParamsArray = array_diff(array_map('trim', $this->search['order']), array('', NULL, FALSE));
               //$this->orderParamsArray = array_filter($this->search['order']);
               $this->createSqlOrder();
               
            }
            
            $this->createUrl();
            
        }
    }
    
    public function createPDOBinds(){
        $binds = [];
        
        foreach($this->whereParamsArray as $field_name => $params){
            $value = $params["param"];
            if(($params['operator'] === 'LIKE') || ($params['operator'] === 'NOT LIKE')){
                $binds[$field_name] = "%$value%";
            } else {
                $binds[$field_name] = $value;
            }
        }
        
        return $binds;
    }
    
    private function createSqlWhere(){
        $SqlWhere = "";
        foreach($this->whereParamsArray as $field_name => $params){
            $SqlWhere .= ' ' . self::$column_prefix. '.' . $field_name . ' ' . $params['operator'] . ' ' . ':' . $field_name . ' AND';
        }
        
        if($SqlWhere){
            $this->SqlWhere = ' WHERE' . preg_replace('/\W\w+\s*(\W*)$/', '$1', $SqlWhere);
            //var_dump($this->SqlWhere);
        }
    }
    
    private function createSqlOrder(){

        foreach($this->orderParamsArray as $field_name => $direction){
            $SqlOrder .= ' ' . self::$column_prefix. '.' . $field_name . ' ' . $direction . ',';
        }
        if($SqlOrder){
            $this->SqlOrder = ' ORDER BY' . substr($SqlOrder, 0, -1).'';
        }
        
        //var_dump($this->SqlOrder);
    }
    
    private function createUrl(){
        $this->GetUrl = '?'.http_build_query(['search' => $this->search]);
    }
    
    public function setValues($fields){
            foreach($fields as $key => $val){
                if(array_key_exists($key, $this->whereParamsArray)){
                   $fields[$key]['value'] = $this->whereParamsArray[$key]['param'];
                }
                if(array_key_exists($key, $this->orderParamsArray)){
                    $fields[$key]['order_direction'] = $this->orderParamsArray[$key];
                }
            }
            //var_dump($fields); die();
            return $fields;
    }
    

}