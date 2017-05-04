<?php
namespace Controllers;

class Awards {

    use Traits\controllerExtension;
    use Traits\Layout;

    public $dbh;
    public $params;
    public $name = 'Awards';
    public $tempdir = 'Awards';
    public $table = 'awards';
    public $table_key = 'award_id';
    public $perpage = 20;

    public function index() {
        $this->all();
    }

    public function admin(){
        $this->page = $this->params[0];
        $this->defaultListLayout([
            'table' => $this->table,
            'pages' => true,
            'search' => true,
            'order_field' => 'award_id',
            'order_dir' => 'DESC',
            'display' => [
                'tpl' => 'Admin/_default_item_list',
                'table' => [
                    ['key'=>'award_id', 'title' => 'Id'],
                    ['key'=>'event_name', 'title' => 'Title'],
                    ['key'=>'place', 'title' => 'Place'],
                    ['key'=>'date_posted', 'title' => 'Date posted'],
                ]
            ]  
        ]);
  
    }
    
    public function add(){
	$this->defaultAddLayout([
	    'event_name' => ['required'],
	    'place' => ['required'],
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

        $stmt = $db->prepare("SELECT * FROM ".DBPREFIX."_awards ORDER BY event_date DESC LIMIT :limit, :perpage");
        $stmt->bindParam(':limit', $range, \PDO::PARAM_INT);
        $stmt->bindParam(':perpage', $this->perpage, \PDO::PARAM_INT);
        
        $stmt->execute();
        $items = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        
        
        $Smarty->assign('total', $total->rows);
        $Smarty->assign('pages', $pages);
        $Smarty->assign('current', $current);
        $Smarty->assign('awards', $items);
        $Smarty->display('Awards/_default_item_list.tpl');

    }


}