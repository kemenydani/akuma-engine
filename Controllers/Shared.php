<?php
namespace Controllers;

trait Shared {
    
    public function array_rand($array){
	return (count($array) > 0) ? $array[rand(0, (count($array) -1))] : 0;
    }
    
    public function find($params = [], $limit = null, $order = []){
	global $db;

	$where_str = "";
	
	if(!empty($params)){
	    
	    $where_str .= "WHERE ";
	    
	    foreach($params as $param){
		$where_str .=  $param . " AND ";
	    }
	    
	    $where_str = substr($where_str, 0, -4);
	    
	}
	
	$order_str = "";
	
	if(!empty($order)){
	    
	    $order_str .= "ORDER BY ";
	    
	    foreach($order as $order_item){
		$order_str .=  $order_item . ", ";
	    }
	    
	    $order_str = substr($order_str, 0, -2);
	    
	}
	
	$limit_str = isset($limit) ? " LIMIT " . $limit : "";

	$sql = $db->query("SELECT * FROM ".self::$db_table." {$where_str} {$order_str} {$limit_str}");
	
	if($limit == 1){
	    $result = $sql->fetch(\PDO::FETCH_ASSOC);
	} else {
	    $result = $sql->fetchAll(\PDO::FETCH_ASSOC);
	}
	
	return $result;
    }
    
    public function urlize($url_parts = []){
	
	$url_str = BASE . "/";
	
	foreach($url_parts as $url_part){
	    $url_str .= $url_part . "/";
	}
	
	return $url_str;
	
    }
    
}