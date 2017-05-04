<?php
namespace Core;

class Cfg {
    
    public $Config;
  
    public function requireConfig($path){
        if($path){
            return $config = include __ROOT__. '/' . \Core\MVC::$configDir . '/' . $path .'.php';
        } else {
            return false;
        }
    }
    
    public function setDefault($FieldList){
        
        $fieldset = [];
        
        foreach($FieldList as $key => $val){
            $fragment = explode(",", preg_replace('/\s+/', '', $val));
            $fieldset[$fragment[0]] = $this->requireConfig('Default/'.$fragment[1]);
        }

        return $fieldset;

    }
    
    public function Users($group = null){
        global $db;
        
        $result = $db->query("SELECT username, user_id FROM xyz_users");
        $users = $result->fetchAll(\PDO::FETCH_ASSOC);
        
        $array = [];
        foreach($users as $user){
            $array[$user['username']] = $user['user_id'];
        }
        
        return $array;
        
    }
    
    public function Teams($group = null){
        global $db;
        
        $result = $db->query("SELECT team_name, team_id FROM xyz_teams");
        $teams = $result->fetchAll(\PDO::FETCH_ASSOC);
        
        $array = [];
        foreach($teams as $team){
            $array[$team['team_name']] = $team['team_id'];
        }
        
        return $array;
        
    }
    
    
    public function Categories($group = null){
        $where = "";
        if(isset($group)){
            $where = 'WHERE main.category_group = "'.$group.'"';
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
        
        return $categories;
        
    }
    /*
    public function Coverages(){
        global $db;
        
        $result = $db->query('SELECT * FROM xyz_coverages ');
        
        $items = $result->fetchAll(\PDO::FETCH_ASSOC);

        $coverages = [];

        foreach($items as $item){
            $coverages[$item['coverage_name']] = $item['coverage_id'];
        }
        
        return $coverages;
        
    }
    */
    public function Folders($root = null){

	$items = [];

	if($root && file_exists("./".$root)){
	    
	    $iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator("./".$root, \RecursiveDirectoryIterator::SKIP_DOTS), \RecursiveIteratorIterator::SELF_FIRST );
	    //$iterator->setMaxDepth(2);

	    foreach ( $iterator as $part ) {
		    if($part->isDir()){ 
			$items[$part->getBasename()] = $part->getPathname();
		    } 
	    }
	    
	}
	
        return $items;
                
    }
    
    public function Files($root = null){

        $iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($root, \RecursiveDirectoryIterator::SKIP_DOTS), \RecursiveIteratorIterator::SELF_FIRST );
        //$iterator->setMaxDepth(2);

        foreach ( $iterator as $part ) {
                if($part->isFile()){ 
                    $items[$part->getPathname()] = $part->getPathname();
                } 
        }

        return $items;
                
    }
    
}
