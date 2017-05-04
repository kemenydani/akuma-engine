<?php

namespace Controllers;

class Partners {
    
    use Traits\controllerExtension;
    use Traits\Layout;
    use Shared;
    
    public $params;
    public $name = 'Partners';
    public $tempdir = 'Partners';
    public $table = 'partners';
    public $table_key = 'partner_id';
    public $perpage = 8;
    public static $obj_name = 'partners';
    public static $db_table = 'xyz_partners';
    
    public function index() {
        $this->all();
    }
   
    public function order($sponsors){
		usort($sponsors, function($first, $second){
		    $orderOne = $first['partner_order'];
		    $orderTwo = $second['partner_order'];
		    if($orderOne == $orderTwo){
			return ($first['partner_id'] > $second['partner_id']) ? 0 : 1;
		    }
		    return ($orderOne > $orderTwo) ? -1 : 1;
		});
		return $sponsors;
    }
    
    public function admin(){
        $this->page = $this->params[0];
        $this->defaultListLayout([
            'table' => $this->table,
            'pages' => true,
            'search' => true,
            'order_field' => 'partner_id',
            'order_dir' => 'DESC',
            'display' => [
                'tpl' => 'Admin/_default_item_list',
                'table' => [
                    ['key'=>'partner_id', 'title' => 'Id'],
                    ['key'=>'partner_name', 'title' => 'Sponsor name'],
		            ['key'=>'partner_order', 'title' => 'Order number'],
                    ['key'=>'date_created', 'title' => 'Date Created'],
                ]
            ] 
        ]);
  
    }
    
    public function all(){
        global $db, $Smarty;
        $result = $db->query("SELECT * FROM ".DBPREFIX."_partners");
        $items = $result->fetchAll(\PDO::FETCH_ASSOC);
        $Smarty->assign('sponsors', $items);
        $Smarty->display('Partners/_all.tpl');
    }
    /*
    public function view(){
        global $db, $Smarty;
        
        $result = $db->query("SELECT * FROM ".DBPREFIX."_news WHERE news_id = '" . $this->params[0] . "' LIMIT 1");
        $item = $result->fetch(\PDO::FETCH_ASSOC);
        //var_dump($item);

        $Smarty->assign('item', $item);
        $Smarty->display('News/view.tpl');

    }
    */
    public function add(){
		$this->defaultAddLayout([
		    'partner_name' => ['required'],
		    'partner_url' => ['required'],
		    'partner_img' => ['required'],
		    'sponsor_small_desc' => ['required'],
		    'description' => ['required']
		]);
    }
    
    public function edit(){
        $this->defaultEditLayout([
		    'partner_name' => ['required'],
		    'partner_url' => ['required'],
		    'partner_img' => ['required'],
		    'sponsor_small_desc' => ['required'],
		    'description' => ['required']
		]);
    }
    
}
