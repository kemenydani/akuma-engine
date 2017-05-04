<?php

namespace Controllers;

class Settings {
    use Traits\controllerExtension;
    use Traits\Layout;
    use Shared;
    
    public $dbh;
    public $params;
    public $name = 'Settings';
    public $tempdir = 'Settings';
    public $table = 'settings';
    public $table_key = 'setting_id';
    public $perpage = 5;
    public static $db_table = 'xyz_settings';
   
    public function index(){
		$this->send();
    }
   
    public function admin(){
        $this->page = $this->params[0];
        $this->defaultListLayout([
            'table' => $this->table,
            'pages' => true,
            'search' => true,
            'order_field' => 'setting_id',
            'order_dir' => 'DESC',
            'display' => [
                'tpl' => 'Admin/_settings_item_list',
                'table' => [
                    ['key'=>'setting_id', 'title' => 'Id'],
                    ['key'=>'setting_name', 'title' => 'Alias'],
                ]
            ]  
        ]);
  
    }
   
    public function add(){
        $this->defaultAddLayout();
    }
    
    public function edit(){
        $this->defaultEditLayout();
    }
   
}
