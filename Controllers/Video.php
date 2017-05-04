<?php
namespace Controllers;

class Video {

    use Traits\controllerExtension;
    use Traits\Layout;
    use Shared;
    
    public $dbh;
    public $params;
    public $name = 'Video';
    public $tempdir = 'Video';
    public $table = 'video';
    public $table_key = 'video_id';
    public $perpage = 12;
    public static $obj_name = 'video';
    public static $db_table = 'xyz_video';
    
    public function index() {
        $this->all();
    }

    public function admin(){
        $this->page = $this->params[0];
        $this->defaultListLayout([
            'table' => $this->table,
            'pages' => true,
            'search' => true,
            'order_field' => 'video_id',
            'order_dir' => 'DESC',
            'display' => [
                'tpl' => 'Admin/_default_item_list',
                'table' => [
                    ['key'=>'video_id', 'title' => 'Id'],
                    ['key'=>'video_title', 'title' => 'Title'],
                    ['key'=>'date_created', 'title' => 'Date Created'],
                ]
            ]
        ]);
  
    }
    
    public function all(){
        global $db, $Smarty;
        
        $total = $db->query("SELECT COUNT(*) as rows FROM ".DBPREFIX."_".$this->table." WHERE active = 1")->fetch(\PDO::FETCH_OBJ);
        $pages = \ceil($total->rows / $this->perpage);
        
        $current = isset($this->params[0]) ? $this->params[0] : 1;
        $range  = $this->perpage * ($current - 1);

        $stmt = $db->prepare("SELECT * FROM ".DBPREFIX."_video WHERE active = 1 ORDER BY date_created DESC LIMIT :limit, :perpage");
        $stmt->bindParam(':limit', $range, \PDO::PARAM_INT);
        $stmt->bindParam(':perpage', $this->perpage, \PDO::PARAM_INT);
        
        $stmt->execute();
        $items = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        $Smarty->assign('total', $total->rows);
        $Smarty->assign('pages', $pages);
        $Smarty->assign('current', $current);
        $Smarty->assign('items', $items);
        $Smarty->display('Video/_default_item_list.tpl');

    }
 
    public function add(){
	$this->defaultAddLayout([
	    'video_title' => ['required'],
	    'youtube_id' => ['required'],
	    'yt_id' => ['required'],
	]);
    }
    
    public function edit(){
        global $Smarty;
     
        $this->id = $this->params[0];
        $formData = \filter_input_array(\INPUT_POST);
        $dbo = new \Core\Database($this->table);
        $cfg = new \Core\Config($this->name);

        $dbo->query('SELECT * FROM '.$dbo->Table.' WHERE '.$this->table_key.' = '.$this->id.' ');
        $item = $dbo->fetch();

        if(($item) === false)
            header('Location:' . BASE . $this->name .'/admin/' );

        if($dbo->update($formData, $this->table_key, $this->id)){
            $Smarty->assign('message', 'Succesfully edited!');
        }
        
        $Smarty->assign("fields", $cfg->Fields);
        $Smarty->assign("item", $item);
        $Smarty->assign("errors", $errors);
        $Smarty->display('Admin/_video_edit_form.tpl');
    }

    public function youtubedata(){
        $formData = filter_input_array(INPUT_POST);

        $id = substr(stristr($formData['url'], 'v='), 2);
        $data = file_get_contents("https://www.googleapis.com/youtube/v3/videos?key=AIzaSyBE4-U09BlrZmV0baSBqdaTrW0Uy4wbvq8&part=snippet&id=".$id."");
        $ytobj = json_decode($data);
        
        $details = [];
        
        $details['title'] = $ytobj->items[0]->snippet->title;
        $details['thumbs'] = $ytobj->items[0]->snippet->thumbnails;

        if($data){
           die(json_encode($details)); 
        } else {
           die(json_encode($id)); 
        }
        
    }

}