<?php
namespace Controllers;

class Members {

    use Traits\controllerExtension;
    use Traits\Layout;
    use Shared;

    public $dbh;
    public $params;
    public $name = 'Members';
    public $tempdir = 'Members';
    public $table = 'members';
    public $table_key = 'member_id';
    public $perpage = 100;
    public static $obj_name = 'members';
    public static $db_table = 'xyz_members';

    public function index() {
        $this->all();
    }

    public function admin(){
        $this->page = $this->params[0];
        $this->defaultListLayout([
            'table' => $this->table,
            'pages' => true,
            'search' => true,
            'display' => [
                'tpl' => 'Admin/_member_item_list',
                'table' => [
                    ['key'=>'role', 'title' => 'Role'],
                    ['key'=>'active', 'title' => 'Active'],
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
    
    public function view(){
        global $Smarty, $db;
        
        $res = $db->query("SELECT * FROM xyz_members m LEFT JOIN xyz_users u ON u.user_id = m.user_id WHERE m.member_id = '".$this->params[0]."'");
        $member = $res->fetch(\PDO::FETCH_ASSOC);
        $res2 = $db->query("SELECT * FROM xyz_teams WHERE team_id = '".$member['team_id']."'");
        $team = $res2->fetch(\PDO::FETCH_ASSOC);
        $res3 = $db->query("SELECT * FROM xyz_members m LEFT JOIN xyz_users u ON u.user_id = m.user_id WHERE m.team_id = '".$member['team_id']."' ");
        $teammates = $res3->fetchAll(\PDO::FETCH_ASSOC);
        
        $result2 = $db->query("SELECT * FROM xyz_blog WHERE user_id = '".$member['user_id']."' AND active = 1 ORDER BY date_posted DESC LIMIT 3");
        $blogs = $result2->fetchAll(\PDO::FETCH_ASSOC);
        $result3 = $db->query("SELECT * FROM xyz_comment WHERE poster_id = '".$member['user_id']."' ORDER BY date_posted DESC LIMIT 6"); 
        $usercomments = $result3->fetchAll(\PDO::FETCH_ASSOC);
        $result5 = $db->query("SELECT * FROM xyz_awards WHERE team_id = '" . $team['team_id'] . "' ORDER BY date_posted DESC");
        $awards = $result5->fetchAll(\PDO::FETCH_ASSOC);
       
        
        $Smarty->assign("usercomments", $usercomments);
        $Smarty->assign("blogs", $blogs);
        $Smarty->assign("awards", $awards);
        $Smarty->assign('details', $member);
        $Smarty->assign('items', $team);
        $Smarty->assign('teammates', $teammates);
        $Smarty->display('Members/view.tpl');
    }
    
    public function all(){
        global $db, $Smarty;
   
        $total = $db->query("SELECT COUNT(*) as rows FROM ".DBPREFIX."_".$this->table."")->fetch(\PDO::FETCH_OBJ);
        $pages = \ceil($total->rows / $this->perpage);
        
        $current = isset($this->params[0]) ? $this->params[0] : 1;
        $range  = $this->perpage * ($current - 1);

        $stmt = $db->prepare("SELECT * FROM ".DBPREFIX."_members ORDER BY members_id DESC LIMIT :limit, :perpage");
        $stmt->bindParam(':limit', $range, \PDO::PARAM_INT);
        $stmt->bindParam(':perpage', $this->perpage, \PDO::PARAM_INT);
        
        $stmt->execute();
        $items = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        
        
        $Smarty->assign('total', $total->rows);
        $Smarty->assign('pages', $pages);
        $Smarty->assign('current', $current);
        $Smarty->assign('items', $items);
        $Smarty->display('Members/all.tpl');

    }


}