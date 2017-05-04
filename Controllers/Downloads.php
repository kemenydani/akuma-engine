<?php
namespace Controllers;

class Downloads {

    use Traits\controllerExtension;
    use Traits\Layout;

    public $dbh;
    public $params;
    public $name = 'Downloads';
    public $tempdir = 'Downloads';
    public $table = 'downloads';
    public $table_key = 'download_id';
    public $perpage = 6;

    public function index() {
        $this->all();
    }

    public function admin(){
        $this->page = $this->params[0];
        $this->defaultListLayout([
            'table' => $this->table,
            'pages' => true,
            'search' => true,
            'order_field' => 'download_id',
            'order_dir' => 'DESC',
            'display' => [
                'tpl' => 'Admin/All',
                'table' => [
                    ['key'=>'download_id', 'title' => 'Id'],
                    ['key'=>'download_name', 'title' => 'Name'],
                    ['key'=>'date_created', 'title' => 'Date created'],
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

    public function download(){
        global $db, $user;

        $file_sql = $db->query("SELECT * FROM ".DBPREFIX."_downloads WHERE download_id = {$this->params[0]} LIMIT 1");
        $file = $file_sql->fetch(\PDO::FETCH_ASSOC);
        header("Content-Type: application/octet-stream");
        header("Content-Transfer-Encoding: Binary");
        header("Content-disposition: attachment; filename=\"".$file['file_path']."\"");
        $new_count = (int)$file['download_count'] += 1;
        $db->query("UPDATE ".DBPREFIX."_downloads SET download_count = {$new_count} WHERE download_id = {$file['download_id']}");
        readfile("http://" . $_SERVER['SERVER_NAME'] . '/' . 'Uploads/files/'.$file['file_path']);
    }

    public function all(){
        global $db, $Smarty;

        $where = "";
        if(isset($_GET['category']) && is_numeric($_GET['category'])) $where .= " WHERE category = {$_GET['category']} ";
        
        $total = $db->query("SELECT COUNT(*) as rows FROM ".DBPREFIX."_".$this->table . $where)->fetch(\PDO::FETCH_OBJ);
        $pages = \ceil($total->rows / $this->perpage);
        $current = isset($this->params[0]) ? $this->params[0] : 1;
        $range  = $this->perpage * ($current - 1);
	
	    if(isset($_GET['category']) && is_numeric($_GET['category'])) $where = "WHERE category = :category";
        
        $stmt = $db->prepare("SELECT * FROM ".DBPREFIX."_downloads {$where} ORDER BY download_id DESC LIMIT :limit, :perpage");
        
	    if(isset($_GET['category']) && is_numeric($_GET['category'])) {
	    	$category_id = (int)$_GET['category'];
		    $stmt->bindParam(':category', $category_id, \PDO::PARAM_INT);
	    }
        $stmt->bindParam(':limit', $range, \PDO::PARAM_INT);
        $stmt->bindParam(':perpage', $this->perpage, \PDO::PARAM_INT);
        $stmt->execute();
        $items = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        foreach($items as $file_key => $file){
            $items[$file_key]['size'] = number_format(filesize('.'. BASE . 'Uploads/files/'.$file['file_path']) /  1048576, 2)."MB";
        }
        $Smarty->assign('total', $total->rows);
        $Smarty->assign('pages', $pages);
	    $Smarty->assign('category_id', $_GET['category']);
        $Smarty->assign('current', $current);
        $Smarty->assign('files', $items);
        $Smarty->display('Downloads/_all.tpl');
    }

}