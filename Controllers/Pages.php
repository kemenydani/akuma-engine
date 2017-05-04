<?php
namespace Controllers;

class Pages {

    use Traits\controllerExtension;
    use Traits\Layout;

    public $dbh;
    public $params;
    public $name = 'Pages';
    public $tempdir = 'Pages';
    public $table = 'pages';
    public $table_key = 'page_id';
    public $perpage = 5;

    public function index() {
        $this->all();
    }

    public function admin(){
        $this->page = $this->params[0];
        $this->defaultListLayout([
            'table' => $this->table,
            'pages' => true,
            'search' => true,
            'order_field' => 'page_id',
            'order_dir' => 'DESC',
            'display' => [
                'tpl' => 'Admin/All',
                'table' => [
                    ['key'=>'page_id', 'title' => 'Id'],
                    ['key'=>'page_name', 'title' => 'Name'],
                    ['key'=>'page_title', 'title' => 'Title'],
                    ['key'=>'date_created', 'title' => 'Date posted'],
                ]
            ]  
        ]);
  
    }
    
    public function add(){
	$this->defaultAddLayout([
	    'page_name' => ['required','unique'],
	    'page_title' => ['required','unique']
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

        $stmt = $db->prepare("SELECT * FROM ".DBPREFIX."_pages ORDER BY page_id DESC LIMIT :limit, :perpage");
        $stmt->bindParam(':limit', $range, \PDO::PARAM_INT);
        $stmt->bindParam(':perpage', $this->perpage, \PDO::PARAM_INT);
        
        $stmt->execute();
        $items = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        
        
        $Smarty->assign('total', $total->rows);
        $Smarty->assign('pages', $pages);
        $Smarty->assign('current', $current);
        $Smarty->assign('items', $items);
        $Smarty->display('Pages/all.tpl');

    }


}