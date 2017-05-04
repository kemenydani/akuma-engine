<?php

namespace Controllers;

class Adv {
    
    use Traits\controllerExtension;
    use Traits\Layout;
    use Shared;
    
    public $params;
    public $name = 'Adv';
    public $tempdir = 'Adv';
    public $table = 'adv';
    public $table_key = 'adv_id';
    public $perpage = 8;
    public static $db_table = 'xyz_adv';
    
    public function index() {
        $this->all();
    }
    
    public function admin(){
        $this->page = $this->params[0];
        $this->defaultListLayout([
            'table' => $this->table,
            'pages' => true,
            'search' => true,
            'order_field' => 'adv_id',
            'order_dir' => 'DESC',
            'display' => [
                'tpl' => 'Admin/All',
                'table' => [
                    ['key'=>'adv_id', 'title' => 'Id'],
                    ['key'=>'adv_name', 'title' => 'Advertisement name'],
                    ['key'=>'date_created', 'title' => 'Date Created'],
                ]
            ] 
        ]);
  
    }
    
    public function all(){
        global $db, $Smarty;
        
        $result = $db->query("SELECT * FROM ".DBPREFIX."_adv");
        $items = $result->fetchAll(\PDO::FETCH_ASSOC);

        $Smarty->assign('advs', $items);
        $Smarty->display('Adv/_default_item_list.tpl');

    }

    public function add(){
	$this->defaultAddLayout([
	    'adv_name' => ['required'],
	    'adv_img' => ['required'],
	    'adv_url' => ['required'],
	    'display_location' => ['required']
	]);
    }
    
    public function edit(){
        $this->defaultEditLayout([
	    'adv_name' => ['required'],
	    'adv_img' => ['required'],
	    'adv_url' => ['required'],
	    'display_location' => ['required']
	]);
    }
    
}
