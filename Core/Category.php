<?php
namespace Core;
class Category {
    
    public function getCatName($id){
        $dbo = new \Core\Database('categories');
        $dbo->query('SELECT category_name FROM '.$dbo->Table.' WHERE category_id = '.$id.' ');
        $item = $dbo->fetch()[0];
        return $item;
    }
    
    public function getCatShort($id){
        $dbo = new \Core\Database('categories');
        $dbo->query('SELECT category_short FROM '.$dbo->Table.' WHERE category_id = '.$id.' ');
        $item = $dbo->fetch()[0];
        return $item;
    }
    
}
