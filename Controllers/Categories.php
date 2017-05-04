<?php
namespace Controllers;

class Categories {

    use Traits\controllerExtension;
    use Traits\Layout;
    use Shared;

    public $dbh;
    public $params;
    public $name = 'Categories';
    public $tempdir = 'Categories';
    public $table = 'categories';
    public $table_key = 'category_id';
    public $perpage = 8;
	public static $obj_name = 'category';
	public static $db_table = 'xyz_categories';

    public function index() {
        $this->all();
    }

    public function admin(){
        $this->page = $this->params[0];
        $this->defaultListLayout([
            'table' => $this->table,
            'pages' => true,
            'search' => true,
            'order_field' => 'category_id',
            'order_dir' => 'DESC',
            'display' => [
                'tpl' => 'Admin/_category_item_list',
                'table' => [
                    ['key'=>'category_id', 'title' => 'Id'],
                    ['key'=>'category_name', 'title' => 'Name'],
                    ['key'=>'category_short', 'title' => 'Short name'],
                    ['key'=>'category_group', 'title' => 'Group'],
                    ['key'=>'date_created', 'title' => 'Date Created'],
                ]
            ]
        ]);
  
    }
    
    public function add(){
	$this->defaultAddLayout([
	    'category_name' => ['unique','required'],
	    'category_short' => ['unique','required'],
	    'category_group' => ['required']
	]);
    }
    
    public function edit(){
        $this->defaultEditLayout([
	    'category_name' => ['unique','required'],
	    'category_short' => ['unique','required'],
	    'category_group' => ['required']
	]);
    }
    
    public function all(){
        global $db, $Smarty;
        
        $total = $db->query("SELECT COUNT(*) as rows FROM ".DBPREFIX."_".$this->table."")->fetch(\PDO::FETCH_OBJ);
        $pages = \ceil($total->rows / $this->perpage);
        
        $current = isset($this->params[0]) ? $this->params[0] : 1;
        $range  = $this->perpage * ($current - 1);

        $stmt = $db->prepare("SELECT * FROM ".DBPREFIX."_categories LIMIT :limit, :perpage");
        $stmt->bindParam(':limit', $range, \PDO::PARAM_INT);
        $stmt->bindParam(':perpage', $this->perpage, \PDO::PARAM_INT);
        
        $stmt->execute();
        $items = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        $Smarty->assign('total', $total->rows);
        $Smarty->assign('pages', $pages);
        $Smarty->assign('current', $current);
        $Smarty->assign('items', $items);
        $Smarty->display('Categories/all.tpl');

    }


}