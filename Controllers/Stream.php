<?php
namespace Controllers;

class Stream {

    use Traits\controllerExtension;
    use Traits\Layout;
    use Shared;
    
    public $dbh;
    public $params;
    public $name = 'Stream';
    public $tempdir = 'Stream';
    public $table = 'stream';
    public $table_key = 'stream_id';
    public $perpage = 8;
    public static $db_table = 'xyz_stream';

    public function index() {
        $this->all();
    }

    public function admin(){
        $this->page = $this->params[0];
        $this->defaultListLayout([
            'table' => $this->table,
            'pages' => true,
            'search' => true,
            'order_field' => 'stream_id',
            'order_dir' => 'DESC',
            'display' => [
                'tpl' => 'Admin/All',
                'table' => [
                    ['key'=>'stream_id', 'title' => 'Id'],
                    ['key'=>'stream_user', 'title' => 'User'],
                    ['key'=>'date_created', 'title' => 'Date Created'],
                ]
            ]
        ]);
  
    }

    public function get_stream_list(){
	die(json_encode($this->find(['active = 1'], 10)));
    }
    
    public function update(){
	global $db;
	
	$formData = \filter_input_array(\INPUT_POST);
        //$dbo = new \Core\Database($this->table);

	if($db->query("UPDATE ". self::$db_table ." SET is_live = {$formData['is_live']}, viewers = {$formData['viewers']} WHERE stream_user = '".$this->params[0]."'")){
	    die(json_encode(1));
	}

    }
    
    public function update_channels(){
	global $db;
	
	$sql = $db->query("SELECT * FROM ".DBPREFIX."_stream WHERE active = 1");
	$result = $sql->fetchAll(\PDO::FETCH_ASSOC);

	foreach($result as $channel){
	    if($channel['stream_host'] === 'twitch'){
		$live = json_decode(@file_get_contents('https://api.twitch.tv/kraken/streams/' . $channel['stream_user']), true);
		$channel = json_decode(@file_get_contents('https://api.twitch.tv/kraken/channels/' . $channel['stream_user']), true);
		
		if($live['stream'] === NULL){
		  $channel['stream_data']['live'] = (int)0;
		} else {
		  $channel['stream_data']['live'] = (int)1;
		}
		
	    }
	}
	
    }
    
    public function all(){
        global $db, $Smarty;
        
        $total = $db->query("SELECT COUNT(*) as rows FROM ".DBPREFIX."_".$this->table."")->fetch(\PDO::FETCH_OBJ);
        $pages = \ceil($total->rows / $this->perpage);
        
        $current = isset($this->params[0]) ? $this->params[0] : 1;
        $range  = $this->perpage * ($current - 1);

        $stmt = $db->prepare("SELECT * FROM ".DBPREFIX."_stream LIMIT :limit, :perpage");
        $stmt->bindParam(':limit', $range, \PDO::PARAM_INT);
        $stmt->bindParam(':perpage', $this->perpage, \PDO::PARAM_INT);
        
        $stmt->execute();
        $streams = $stmt->fetchAll(\PDO::FETCH_ASSOC);

	
	/*
        foreach($items as $item){
            
	    
            if($item['stream_host'] === 'twitch'){
                
               $live = json_decode(@file_get_contents('https://api.twitch.tv/kraken/streams/' . $item['stream_user']), true);
               $channel = json_decode(@file_get_contents('https://api.twitch.tv/kraken/channels/' . $item['stream_user']), true);
               
               if($live['stream'] === NULL){
                  $item['stream_data']['live'] = (int)0;
               } else {
                  $item['stream_data']['live'] = (int)1;
               }
               
               $item['stream_data']['title'] = $channel['display_name'];
               $item['stream_data']['logo'] = $channel['video_banner'];
               
            }
            
            $return[] = $item;
            
        }
        */
	
        $Smarty->assign('total', $total->rows);
        $Smarty->assign('pages', $pages);
        $Smarty->assign('current', $current);
        $Smarty->assign('streams', $streams);
        $Smarty->display('Stream/_default_item_list.tpl');

    }
 
    public function add(){
	$this->defaultAddLayout([
	    'stream_title' => ['required'],
	    'stream_user' => ['required', 'unique'],
	]);
    }
    
    public function edit(){
        $this->defaultEditLayout([
	    'stream_title' => ['required'],
	    'stream_user' => ['required', 'unique'],
	]);
    }
    

    public function youtubedata(){
        $formData = filter_input_array(INPUT_POST);

        $id = substr(stristr($formData['url'], 'v='), 2);
        $data = file_get_contents("https://www.googleapis.com/youtube/v3/streams?key=AIzaSyBE4-U09BlrZmV0baSBqdaTrW0Uy4wbvq8&part=snippet&id=".$id."");
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