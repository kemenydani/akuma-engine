<?php

namespace Controllers;

class About {
    
    use Traits\controllerExtension;
    use Traits\Layout;
    use Shared;
    
    public $params;
    public $name = 'About';
    public $tempdir = 'About';
    public $table = 'about';
    public $table_key = 'about_id';
    public $perpage = 8;
    public static $obj_name = 'about';
    public static $db_table = 'xyz_about';
    
    public function index() {
        $this->view();
    }
    
    public function admin(){
        $this->page = $this->params[0];
        $this->defaultListLayout([
            'table' => $this->table,
            'pages' => true,
            'search' => true,
            'order_field' => 'about_id',
            'order_dir' => 'DESC',
            'display' => [
                'tpl' => 'Admin/_about_all',
                'table' => [
                    ['key'=>'about_id', 'title' => 'Id'],
                    ['key'=>'about_short', 'title' => 'Advertisement name'],
                    ['key'=>'last_updated', 'title' => 'Last updated'],
                ]
            ] 
        ]);
  
    }

    public function view(){
	global $Smarty;
	
	$about = $this->find([],1);
	
	$Smarty->assign('about', $about);
	$Smarty->display('About/_view.tpl');
    }
    
    public function add(){
	$this->defaultAddLayout([
	    'about_long' => ['required'],
	    'about_short' => ['required'],
	    'adv_url' => ['required']
	]);
    }
    
    public function edit(){
        $this->defaultEditLayout([
	    'about_long' => ['required'],
	    'about_short' => ['required'],
	    'adv_url' => ['required']
	]);
    }
    
}
