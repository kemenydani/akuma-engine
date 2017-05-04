<?php
namespace Controllers;

class Media {

    use Traits\controllerExtension;
    use Traits\Layout;

    public $dbh;
    public $params;
    public $name = 'Media';
    public $tempdir = 'Media';
    public $table = 'news';
    public $table_key = 'news_id';
    public $perpage = 5;

    public function index() {
        global $db, $Smarty;
        
        $result1 = $db->query("SELECT * FROM xyz_video WHERE active = 1 ORDER BY date_created DESC LIMIT 7 ");
        $videos = $result1->fetchAll(\PDO::FETCH_ASSOC);
        $result2 = $db->query("SELECT * FROM xyz_gallery ORDER BY date_posted DESC LIMIT 3 ");
        $galleries = $result2->fetchAll(\PDO::FETCH_ASSOC);
      
        foreach($galleries as $gallery){
            $images = json_decode($gallery['img_settings'], true);
            
            $folder = slash($gallery['folder']);
            
            $thumb_folder_arr = explode('/', $folder);
            $thumb_folder_arr[0] = 'thumbs';
            $thumb_folder = "";
            
            for($x = 0; $x < count($thumb_folder_arr); $x++){
                $thumb_folder = $thumb_folder . $thumb_folder_arr[$x] . '/';
            }
            
            $gallery['folder'] = $folder;
            $gallery['thumb_folder'] = substr($thumb_folder, 0, -1);
            $gallery['cover_image'] = $images['cover_img'];
            $gallery['highlighted'] = $images['highlighted'];
            
            if(is_file($gallery['thumb_folder'] . '/' . $gallery['cover_image'])){
                $gallery['img']['cover']['thumb'] = $gallery['thumb_folder'] . '/' . $gallery['cover_image'];
                $gallery['img']['cover']['original'] = $gallery['folder'] . '/' . $gallery['cover_image'];
            } else {
                $gallery['img']['cover']['thumb'] = $gallery['folder'] . '/' . $gallery['cover_image'];
                $gallery['img']['cover']['original'] = $gallery['folder'] . '/' . $gallery['cover_image'];
            }
            
            for($i = 0; $i < count($gallery['highlighted']); $i++){
                if(is_file($gallery['thumb_folder'] . '/' . $gallery['highlighted'][$i])){
                    $gallery['img']['highlighted'][$i]['thumb'] = $gallery['thumb_folder'] . '/' . $gallery['highlighted'][$i];
                    $gallery['img']['highlighted'][$i]['original'] = $gallery['folder'] . '/' . $gallery['highlighted'][$i];
                } else {
                    $gallery['img']['highlighted'][$i]['thumb'] = $gallery['folder'] . '/' . $gallery['highlighted'][$i];
                    $gallery['img']['highlighted'][$i]['original'] = $gallery['folder'] . '/' . $gallery['highlighted'][$i];
                } 
            }
            
            $gallery_items[] = $gallery;
        }

        $Smarty->assign('galleries', $gallery_items);
        $Smarty->assign('videos', $videos);
        $Smarty->display('Media/index.tpl');
    }

    public function admin(){
        $this->page = $this->params[0];
        $this->defaultListLayout([
            'table' => $this->table,
            'pages' => true,
            'search' => true,
            'display' => [
                'tpl' => 'Admin/All',
                'table' => [
                    ['key'=>'news_id', 'title' => 'Id'],
                    ['key'=>'news_title', 'title' => 'Title'],
                    ['key'=>'date_posted', 'title' => 'Date posted'],
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
        $Smarty->display('Media/all.tpl');

    }


}