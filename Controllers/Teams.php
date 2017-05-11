<?php
namespace Controllers;

class Teams {

    use Traits\controllerExtension;
    use Traits\Layout;
    use Shared;

    public $dbh;
    public $params;
    public $name = 'Teams';
    public $tempdir = 'Teams';
    public $table = 'teams';
    public $table_key = 'team_id';
    public $perpage = 8;
    public static $obj_name = 'teams';
    public static $db_table = 'xyz_teams';
 
    public function index() {
        $this->all();
    }
    
    public function order($teams){
	
	usort($teams, function($first, $second){
	    $orderOne = $first['team_order'];
	    $orderTwo = $second['team_order'];
	    
	    if($orderOne == $orderTwo){
		return ($first['team_id'] > $second['team_id']) ? 0 : 1;
	    }
	    
	    return ($orderOne > $orderTwo) ? -1 : 1;
	    
	});
	
	return $teams;
    }
    
    public function admin(){
        $this->page = $this->params[0];
        $this->defaultListLayout([
            'table' => $this->table,
            'pages' => true,
            'search' => true,
            'order_field' => 'team_id',
            'order_dir' => 'DESC',
            'display' => [
                'tpl' => 'Admin/_team_item_list',
                'table' => [
                    ['key'=>'team_id', 'title' => 'Id'],
                    ['key'=>'team_name', 'title' => 'Title'],
		            ['key'=>'team_order', 'title' => 'Order number'],
                    ['key'=>'date_created', 'title' => 'Date created'],
                ]
            ]  
        ]);
  
    }
    
    public function view(){
        global $db, $Smarty;
        
        $result1 = $db->query("SELECT * FROM xyz_teams WHERE team_id = '" . $this->params[0] . "' LIMIT 1");
        $team = $result1->fetch(\PDO::FETCH_ASSOC);
        $result2 = $db->query("SELECT * FROM xyz_members m LEFT JOIN xyz_users u ON u.user_id = m.user_id WHERE m.team_id = '" . $this->params[0] . "'");
        $members = $result2->fetchAll(\PDO::FETCH_ASSOC);
        $result3 = $db->query("SELECT * FROM xyz_matches WHERE home_team_id = '" . $this->params[0] . "' ORDER BY date_created DESC LIMIT 6");
        $matches = $result3->fetchAll(\PDO::FETCH_ASSOC);
        $result4 = $db->query("SELECT * FROM xyz_matches WHERE home_team_id = '" . $this->params[0] . "'");
        $stat = $result4->fetchAll(\PDO::FETCH_ASSOC);
        $result5 = $db->query("SELECT * FROM xyz_awards WHERE team_id = '" . $this->params[0] . "' ORDER BY event_date DESC LIMIT 6");
        $awards = $result5->fetchAll(\PDO::FETCH_ASSOC);
        
        $Smarty->assign('awards', $awards);
        $Smarty->assign('stat', $stat);
        $Smarty->assign('matches', $matches);
        $Smarty->assign('members', $members);
        $Smarty->assign('team', $team);
        $Smarty->display('Teams/_view.tpl');
    }
    
    public function add(){
	$this->defaultAddLayout([
	    'team_name' => ['required'],
	    'short_name' => ['required'],
	    'team_image' => ['required'],
	    'type' => ['required'],
	    'category' => ['required']
	]);
    }
    
    public function edit(){
        $this->defaultEditLayout();
    }
    
    public function all(){
        global $db, $Smarty;
        
        /*
        $total = $db->query("SELECT COUNT(*) as rows FROM ".DBPREFIX."_".$this->table." WHERE active = 1 AND type = 'game'")->fetch(\PDO::FETCH_OBJ);
        $pages = \ceil($total->rows / $this->perpage);
        
        $current = isset($this->params[0]) ? $this->params[0] : 1;
        $range  = $this->perpage * ($current - 1);
		*/
        $stmt = $db->prepare("SELECT * FROM ".DBPREFIX."_teams t WHERE t.active = 1 AND t.type = 'game' ORDER BY t.team_id DESC");
        /*
        $stmt->bindParam(':limit', $range, \PDO::PARAM_INT);
        $stmt->bindParam(':perpage', $this->perpage, \PDO::PARAM_INT);
        */
        $stmt->execute();
        $items = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        
        /*
        $Smarty->assign('total', $total->rows);
        $Smarty->assign('pages', $pages);
        $Smarty->assign('current', $current);
        */
        $Smarty->assign('items', $this->order($items));
        $Smarty->display('Teams/_all.tpl');

    }


}