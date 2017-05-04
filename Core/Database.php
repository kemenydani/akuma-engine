<?php

namespace Core;

class Database {
    
    public $db;
    public $Sql;
    public $Stmt;
    public $Result;
    public $Binds;
    public $Table;
    public $table_key;
    
    public $search;
    
    public $Limit = [];

    public function __construct($table = null) {
        global $db;
        
        $this->db = $db;
        
        if(isset($table)){
           $this->Table = $this->setTable($table);
        }
        
    }
    
    public function insert($formData){
        
        if($formData){
    
	    \array_filter($formData, 'strlen');
	
            foreach($formData as $name => $value) {
                if(is_array($value)){
                    $value = json_encode($value);
                }
                $keys .= ''.$name.', ';
                $bind_names .= ':'.$name.', ';
		
		if(is_numeric($value)){
		    $value = (int)$value;
		}
		
                $this->Binds[':'.$name]  = $value;
            }
	    
	 
            $keys = substr($keys, 0, -2).'';
            $bind_names = substr($bind_names, 0, -2).'';
	    
            $this->Sql = 'INSERT INTO ' . $this->Table . ' ('.$keys.') VALUES ('.$bind_names.')';
	
	    $hold_binds = $this->Binds;
            $this->prepare();
	
            if($this->execute($hold_binds) === true){
               return true;
            }
        }
        return false; 
        
    }
    
    public function update($formData, $key, $id){
        
        if($formData){
            
            \array_filter($formData, 'strlen');
	    
            $this->Sql = 'UPDATE ' . $this->Table . ' SET';
            $values = array();

            foreach ($formData as $name => $value) {
                if(is_array($value)){
                    $value = json_encode($value);
                }
                $this->Sql .= ' '.$name.' = :'.$name.',';
                $values[':'.$name] = $value;
            }

            $this->Sql = substr($this->Sql, 0, -1).' ';
            $this->Sql .= "WHERE " . $key . " = " . $id . "";
       
            $this->prepare();

            if($this->execute($values) === true){
               return true;
            }
        }
        return false;  
    }
    
    public function setTable($table){
        return $this->Table = \DBPREFIX.'_'.$table;
    }
    
    public function deleteMultiple($params){
        $this->prepare("DELETE FROM ".$this->Table." WHERE ".$params[0]." IN ($params[1])");
        $this->execute();
        return;
    }
    
    public function delete($key, $id){
        $this->query("DELETE FROM ".$this->Table." WHERE ".$key." = '".$id."'");
        //$this->execute();
        return;
    }

    public function selectAll($table = null){
        $this->Table = isset($table) ? $this->setTable($table) : $this->Table;
        
        $this->Sql = 'SELECT * FROM ' .$this->Table;
        $this->prepare();
        $this->execute();
        return $this->Result = $this->fetchAll();
    }
    
    public function selectCount($table = null){
        $this->Table = isset($table) ? $this->setTable($table) : $this->Table;
        
        $this->Sql = 'SELECT COUNT(*) FROM ' .$this->Table;
        return $this->Result = $this->query()->fetchColumn();
    }
    
    //set params
    public function setLimit($param1, $param2 = null){
        if(isset($param2)){
            
            $this->Binds['start'] = $param1;
            $this->Binds['limit'] = $param2;
            
            return $this->Limit[] = ':start, :limit';
        } else {
            
            $this->Binds['limit'] = $param1;

            return $this->Limit[] = ':limit';
        }
    }
    
    
    public function setWhere($array){
        if(isset($array)){
            foreach($array as $key => $val){
                $fragment .= $key . '=' . $key;
            }
            return 'WHERE ' . $fragment;
        }
        return false;
    }
    
    public function keepUrl($array){
        
    }
    
    public function prepareSearch($array){
        if(is_array($array)){
            foreach($array as $key => $val){
                $fragment .= 'main.'.$key . ' LIKE ' . ':'.$key . ' AND ';
                $this->Binds[$key] = "%$val%";
            }
            $this->search['query'] = 'WHERE ' . substr($fragment, 0, -4).'';
            $this->search['url'] = '?'.http_build_query(['search' => $array]);
        }
        return false;
    }
    
    
    //final
    public function setBinds($array){
        foreach($array as $key => $val){
            $this->Binds[':'.$key] = $val;
        }
    }
    
    public function bindParams(){
        foreach($this->Binds as $key => &$val){
            if(\is_numeric($val)){
                $this->Stmt->bindParam(':'.$key, $val, \PDO::PARAM_INT);
            } else {
                $this->Stmt->bindParam(':'.$key, $val, \PDO::PARAM_STR);
            } 
        }
    }
    
    public function prepare($sql = null){
        if($sql){
            $this->Sql = $sql;
        } 
        $this->Stmt = $this->db->prepare($this->Sql);
    }
    
    public function bindParam($key, $val){
        if(\is_numeric($val)){
            $this->Stmt->bindParam(':'.$key, $val, \PDO::PARAM_INT);
         } else {
            $this->Stmt->bindParam(':'.$key, $val, \PDO::PARAM_STR);
        } 
    }
 
    public function execute($array = []){
        if(!empty($array)){
            return $this->Stmt->execute($array);
        } 
        return $this->Stmt->execute();
    }
    
    public function query($sql){
        if($sql){
            $this->Sql = $sql;
        } 
        return $this->Stmt = $this->db->query($this->Sql);
    }
    
    public function rowCount(){
        return $this->Stmt->rowCount();
    }
    
    public function fetchAllAssoc(){
        return $this->Stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function fetchAll(){
        return $this->Stmt->fetchAll();
    }
    public function fetch(){
        return $this->Stmt->fetch();
    }
    public function fetchAssoc(){
        return $this->Stmt->fetch(\PDO::FETCH_ASSOC);
    }
    
}
