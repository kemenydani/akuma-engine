<?php
namespace Controllers;

class Comment {

    use Traits\controllerExtension;
    use Traits\Layout;
    use Shared;

    public $dbh;
    public $params;
    public $name = 'Comment';
    public $tempdir = 'Comment';
    public $table = 'comment';
    public $table_key = 'comment_id';
    public $perpage = 40;
    public static $obj_name = 'comment';
    public static $db_table = 'xyz_comment';

    public function index() {
        $this->all();
    }

    public function admin(){
        $this->page = $this->params[0];
        $this->defaultListLayout([
            'table' => $this->table,
            'pages' => true,
            'search' => true,
            'order_field' => 'comment_id',
            'order_dir' => 'DESC',
            'display' => [
                'tpl' => 'Admin/_comment_item_list',
                'table' => [
                    ['key'=>'comment_id', 'title' => 'Id'],
                    ['key'=>'controller', 'title' => 'Module'],
                    ['key'=>'location', 'title' => 'Location'],
                    ['key'=>'comment_text', 'title' => 'Comment text'],
                    ['key'=>'date_posted', 'title' => 'Date posted'],
                ]
            ]  
        ]);
  
    }
    
    public function add(){
        global $Smarty, $db, $user;
        
        $formData = filter_input_array(INPUT_POST);

        if(filter_input_array(INPUT_POST)){
           
 
                $dbo = new \Core\Database('comment');
                $dbo->insert($formData);
                
    
        }
        
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        
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

        $stmt = $db->prepare("SELECT * FROM ".DBPREFIX."_comment ORDER BY comment_id DESC LIMIT :limit, :perpage");
        $stmt->bindParam(':limit', $range, \PDO::PARAM_INT);
        $stmt->bindParam(':perpage', $this->perpage, \PDO::PARAM_INT);
        
        $stmt->execute();
        $items = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        
        
        $Smarty->assign('total', $total->rows);
        $Smarty->assign('pages', $pages);
        $Smarty->assign('current', $current);
        $Smarty->assign('items', $items);
        $Smarty->display('Comment/all.tpl');

    }


}