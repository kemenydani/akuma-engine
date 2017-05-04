<?php
namespace Controllers;

class News {

    use Traits\controllerExtension;
    use Traits\Layout;
    use Shared;
    
    public $dbh;
    public $params;
    public $name = 'News';
    public $tempdir = 'News';
    public $table = 'news';
    public $table_key = 'news_id';
    public $perpage = 5;
    public static $obj_name = 'news';
    public static $db_table = 'xyz_news';

    public function index() {
        $this->all();
    }

    public function admin(){
        $this->page = $this->params[0];
        $this->defaultListLayout([
            'table' => $this->table,
            'pages' => true,
            'search' => true,
            'order_field' => 'news_id',
            'order_dir' => 'DESC',
            'display' => [
                'tpl' => 'Admin/_default_item_list',
                'table' => [
                    ['key'=>'news_id', 'title' => 'Id'],
                    ['key'=>'news_title', 'title' => 'Title'],
                    ['key'=>'date_posted', 'title' => 'Date posted'],
                ]
            ]  
        ]);
  
    }
    
    public function add(){
	$this->defaultAddLayout([
	    'news_title' => ['required'],
	    'news_quote' => ['required'],
	    'news_long' => ['required'],
	    'news_image' => ['required'],
	]);
    }
    
    public function edit(){
        $this->defaultEditLayout();
    }
    
    public function all(){
        global $db, $Smarty;
   
        $total = $db->query("SELECT COUNT(*) as rows FROM ".DBPREFIX."_".$this->table."")->fetch(\PDO::FETCH_OBJ);
        $pages = \ceil($total->rows / $this->perpage);
        
        $current = isset($this->params[0]) ? $this->params[0] : 1;
        $range  = $this->perpage * ($current - 1);

        $stmt = $db->prepare("SELECT * FROM ".DBPREFIX."_news ORDER BY news_id DESC LIMIT :limit, :perpage");
        $stmt->bindParam(':limit', $range, \PDO::PARAM_INT);
        $stmt->bindParam(':perpage', $this->perpage, \PDO::PARAM_INT);
        
        $stmt->execute();
        $items = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        
        
        $Smarty->assign('total', $total->rows);
        $Smarty->assign('pages', $pages);
        $Smarty->assign('current', $current);
        $Smarty->assign('items', $items);
        $Smarty->display('News/_default_item_list.tpl');

    }


}