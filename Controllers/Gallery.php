<?php
namespace Controllers;

class Gallery {

    use Traits\controllerExtension;
    use Traits\Layout;
    use Shared;

    public $dbh;
    public $params;
    public $name = 'Gallery';
    public $tempdir = 'Gallery';
    public $table = 'gallery';
    public $table_key = 'gallery_id';
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
            'order_field' => 'gallery_id',
            'order_dir' => 'DESC',
            'display' => [
                'tpl' => 'Admin/_gallery_item_list',
                'table' => [
                    ['key'=>'gallery_id', 'title' => 'Id'],
                    ['key'=>'gallery_name', 'title' => 'Title'],
                    ['key'=>'date_posted', 'title' => 'Date posted'],
                ]
            ] 
        ]);
    }
    
    // 2016.11.03 
    public function find_gallery($params = []){
	global $db;
	
        $where_str = "";
	
	if(!empty($params)){
	    
	    $where_str .= "WHERE ";
	    
	    foreach($params as $param){
		$where_str .=  $param . " AND ";
	    }
	    
	    $where_str = substr($where_str, 0, -4);
	    
	}

	$result1 = $db->query("SELECT * FROM xyz_gallery {$where_str}");
	$item = $result1->fetch(\PDO::FETCH_ASSOC);
	//var_dump($item['folder']); die();
	$images = [];

	try {
	    $iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(slash($item['folder']), \RecursiveDirectoryIterator::SKIP_DOTS), \RecursiveIteratorIterator::SELF_FIRST );
	    $iterator->setMaxDepth(0);

	    foreach ( $iterator as $part ) {
		if($part->isFile()){ 
		    $images[] = str_replace('\\','/',$part->getPathname());
		} 
	    }
	} catch (\Exception $e){

	}

	$item['images'] = $images;

	return $item;

    }
    
    public function view(){
        global $db, $Smarty;
        
        $result1 = $db->query("SELECT * FROM xyz_gallery WHERE gallery_id = '" . $this->params[0] . "' LIMIT 1");
        $item = $result1->fetch(\PDO::FETCH_ASSOC);
        
	$images = [];

	try {
	
	    $iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(slash($item['folder']), \RecursiveDirectoryIterator::SKIP_DOTS), \RecursiveIteratorIterator::SELF_FIRST );
	    $iterator->setMaxDepth(0);
	    $images = [];
	    foreach ( $iterator as $part ) {
		if($part->isFile()){ 
		    $images[] = str_replace('\\','/',$part->getPathname());
		} 
	    }
	
	} catch (\Exception $e){

	}
	
        $item['images'] = $images;

        $Smarty->assign('item', $item);
        $Smarty->display($this->tempdir.'/_view.tpl');
    }
    
    public function manage(){
        global $db, $Smarty;

        if($_POST){
           $dbo = new \Core\Database($this->table);
           if($dbo->update($_POST, $this->table_key, $this->params[0])){
               $Smarty->assign('message', 'Succesfully changed!');
           }
        }
        
        $result = $db->query("SELECT * FROM xyz_gallery WHERE gallery_id = ".$this->params[0]." ");
        $item = $result->fetch(\PDO::FETCH_ASSOC);
        
        $item['folder'] = slash($item['folder']);
        
        //thumb folder
        $explode = \explode('/', $item['folder']);
        $explode[0] = 'thumbs';
        for($x = 0; $x < count($explode); $x++){
            $item['thumb_folder'] = $item['thumb_folder'] . $explode[$x] . '/';
        }
        $item['thumb_folder'] = substr($item['thumb_folder'], 0, -1);
        
        $iterator1 = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($item['folder'], \RecursiveDirectoryIterator::SKIP_DOTS), \RecursiveIteratorIterator::SELF_FIRST );
        $iterator1->setMaxDepth(0);
        
        $real_images = [];
        foreach ( $iterator1 as $part ) {
            if($part->isFile()){ 
                $real_images[] = str_replace('\\','/',$part->getPathname());
            } 
        }
       
        $iterator2 = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($item['thumb_folder'], \RecursiveDirectoryIterator::SKIP_DOTS), \RecursiveIteratorIterator::SELF_FIRST );
        $iterator2->setMaxDepth(0);
        
        $thumb_images = [];
        foreach ( $iterator2 as $part ) {
            if($part->isFile()){ 
                $thumb_images[] = str_replace('\\','/',$part->getPathname());
            } 
        }

        $thumb_images_pattern = [];
        
        for($t = 0; $t < count($thumb_images); $t++){
            $thumb_images_pattern[$t] = end(explode('/', $thumb_images[$t]));
        }

        $images = [];
        for($i = 0; $i < count($real_images); $i++){

            if($found_key = array_search(end(explode('/', $real_images[$i])), $thumb_images_pattern)){
                $images[] = [
                    'name' => end(explode('/', $real_images[$i])),
                    'image' => $real_images[$i],
                    'thumb' => $thumb_images[$found_key]
                ];
            } else {
                $images[] = [
                    'name' => end(explode('/', $real_images[$i])),
                    'image' => $real_images[$i],
                    'thumb' => $real_images[$i]
                ]; 
            }
            
        }

        $item['images'] = $images;
        
        $Smarty->assign('item', $item);
        $Smarty->display('Gallery/manage.tpl');
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

        $stmt = $db->prepare("SELECT * FROM ".DBPREFIX."_gallery LIMIT :limit, :perpage");
        $stmt->bindParam(':limit', $range, \PDO::PARAM_INT);
        $stmt->bindParam(':perpage', $this->perpage, \PDO::PARAM_INT);
        
        $stmt->execute();
        $items = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        foreach($items as $gallery){
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
        
        $Smarty->assign('total', $total->rows);
        $Smarty->assign('pages', $pages);
        $Smarty->assign('current', $current);
        $Smarty->assign('items', $gallery_items);
        $Smarty->display('Gallery/_default_item_list.tpl');

    }
    
    public function browse(){
        global $db, $Smarty;
        
        $result = $db->query("SELECT * FROM ".DBPREFIX."_".$this->table." "
                           . "WHERE ".$this->table_key." = '" . $this->params[0] . "' LIMIT 1");
        
        $item = $result->fetch(\PDO::FETCH_ASSOC);
        
        $iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(str_replace('\\','/',$item['folder']), \RecursiveDirectoryIterator::SKIP_DOTS), \RecursiveIteratorIterator::SELF_FIRST );
            $iterator->setMaxDepth(0);
            $images = [];
            foreach ( $iterator as $part ) {
                if($part->isFile()){ 
                    $images[] = $part->getPathname();
                } 
        }
        
        $item['images'] = $images;

        $Language = new \Core\Language();
        
        $Smarty->assign('Language', $Language);
        $Smarty->assign('item', $item);
        $Smarty->display($this->tempdir.'/_view.tpl');

    }
    /*
    public function addImages(){
        
        $formData = \filter_input_array(\INPUT_POST);
        
        $iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($formData['folder'], \RecursiveDirectoryIterator::SKIP_DOTS), \RecursiveIteratorIterator::SELF_FIRST );
        $iterator->setMaxDepth(0);

        foreach ( $iterator as $part ) {
            if($part->isFile()){ 
                $items[$part->getPathname()] = $part->getPathname();
            } 
        }
        
        $dbo = new \Core\Database('gallery_images');
        $id = $dbo->db->lastInsertId();
        foreach($items as $key => $val){
            $dbo->insert([
                'gallery_id' => $id,
                'image_path' => $val,
                'image_name' => 1
            ]);
        }

    }
    */
    public function add(){
	$this->defaultAddLayout([
	    'gallery_name' => ['required'],
	    'folder' => ['required'],
	    'headline_image' => ['required']
	]);
	/*
	if($_POST){
	    $this->addImages();
	}
	*/
    }
    
    public function hasErrors($formData){
        return false;
    }
    



}