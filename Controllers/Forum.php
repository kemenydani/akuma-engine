<?php
namespace Controllers;

class Forum {

    use Traits\controllerExtension;
    use Traits\Layout;

    public $dbh;
    public $params;
    public $name = 'Forum';
    public $tempdir = 'Forum';
    public $table = 'forum';
    public $table_key = 'forum_id';
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
   
        $total = $db->query("SELECT COUNT(*) as rows FROM ".DBPREFIX."_" . $this->table)->fetch(\PDO::FETCH_OBJ);
        $pages = \ceil($total->rows / $this->perpage);
        
        $current = isset($this->params[0]) ? $this->params[0] : 1;
        $range  = $this->perpage * ($current - 1);

        $stmt = $db->prepare("SELECT * FROM ".DBPREFIX."_forum ORDER BY forum_id ASC LIMIT :limit, :perpage");
        $stmt->bindParam(':limit', $range, \PDO::PARAM_INT);
        $stmt->bindParam(':perpage', $this->perpage, \PDO::PARAM_INT);
        
        $stmt->execute();
        $forums = $stmt->fetchAll(\PDO::FETCH_ASSOC);
	
        foreach($forums as $forum_index => $forum_item){
		    $forum_thread_sql = $db->query('SELECT * FROM '.DBPREFIX."_forum_threads WHERE forum_id = {$forum_item['forum_id']}");
	        $threads = $forum_thread_sql->fetchAll(\PDO::FETCH_ASSOC);
            $forums[$forum_index]['threads'] = count($threads);
            $forums[$forum_index]['comments'] = [];

            foreach($threads as $thread_index => $thread){
                $comments_sql = $db->query("SELECT * FROM ".DBPREFIX."_comment WHERE controller = 'forum' AND item_id = {$thread['thread_id']} ORDER BY date_posted DESC");
                $thread_comments = $comments_sql->fetchAll(\PDO::FETCH_ASSOC);
                if($thread_comments){
                    $forums[$forum_index]['comments'] = $thread_comments;
                }
            }

            usort($forums[$forum_index]['comments'], function($first, $second) {
                $firstDate = new \DateTime($first['date_posted']);
                $secondDate = new \DateTime($second['date_posted']);

                if ($firstDate == $secondDate) {
                    return 0;
                }

                return $firstDate < $secondDate ? 1 : -1;
            });

        }

        $Smarty->assign('total', $total->rows);
        $Smarty->assign('pages', $pages);
        $Smarty->assign('current', $current);
        $Smarty->assign('forums', $forums);
        $Smarty->display('Forum/_all.tpl');
    }

    public function create_thread(){
        global $Smarty, $user, $db;

        $forum = $db->query("SELECT * FROM xyz_forum WHERE forum_id = {$this->params[0]}")->fetch(\PDO::FETCH_ASSOC);

        if(filter_input_array(INPUT_POST)) {
            $formData = filter_input_array(INPUT_POST);
            $errors = [];
            $secret_key = (new \Controllers\Settings)->find(['variable_name = "capcha_secret_key"'], 1);
            if (!isset($formData['g-recaptcha-response'])) {
                $errors['recaptcha'][] = "Please use the recaptcha.";
            } else {

                $secret = $secret_key['setting_value'];
                $ip = $_SERVER['REMOTE_ADDR'];
                $captcha = $formData['g-recaptcha-response'];
                $resp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
                $arr = json_decode($resp, true);

                if ($arr['success']) {

                } else {
                    $errors['recaptcha'][] = "The recapctha was wrong.";
                }
            }
            if (!$formData['thread_title']) {
                $errors['thread_title'][] = "This field is required.";
            }
            if (!$formData['thread_text']) {
                $errors['thread_text'][] = "This field is required.";
            }
            if (strlen($formData['thread_title']) < 5) {
                $errors['thread_title'][] = "The title must be longer than 5 characters.";
            }
            if (strlen($formData['thread_title']) > 60) {
                $errors['thread_title'][] = "The title must be shorter than 60 characters.";
            }
            if (strlen($formData['thread_text']) < 5) {
                $errors['thread_text'][] = "The content must be longer than 5 characters.";
            }
            if (strlen($formData['thread_text']) > 2000) {
                $errors['thread_text'][] = "The content must be shorter than 2000 characters.";
            }

            if (empty($errors)) {
                $dbo = new \Core\Database("forum_threads");
                $dbo->insert([
                    'thread_title' => $formData['thread_title'],
                    'thread_text' => $formData['thread_text'],
                    'user_id' => $user['user_id'],
                    'forum_id' => $this->params[0]
                ]);
                $Smarty->assign('success', 1);
            } else {
                $Smarty->assign('data', $formData);
                $Smarty->assign('errors', $errors);
            }
        }
        $Smarty->assign('data', $formData);
        $Smarty->assign('forum', $forum);
        $Smarty->display('Forum/_create_topic.tpl');
    }

    public function delete_thread(){
        global $user, $db;

        if((int)$user['level'] === 10){
            $db->query("DELETE FROM ".DBPREFIX."_forum_threads WHERE thread_id = {$this->params[0]} LIMIT 1");
        }
    }

    public function edit_thread(){
        global $Smarty, $db, $user;

        $thread_sql = $db->query("SELECT * FROM ".DBPREFIX."_forum_threads WHERE thread_id = {$this->params[0]} LIMIT 1");
        $thread = $thread_sql->fetch(\PDO::FETCH_ASSOC);

        if((int)$thread['user_id'] === (int)$user['user_id']){

            $formData = filter_input_array(INPUT_POST);
            if (filter_input_array(INPUT_POST)) {

                if (!$formData['thread_title']) {
                    $errors['thread_title'][] = "This field is required.";
                }
                if (!$formData['thread_text']) {
                    $errors['thread_text'][] = "This field is required.";
                }
                if (strlen($formData['thread_title']) < 5) {
                    $errors['thread_title'][] = "The title must be longer than 5 characters.";
                }
                if (strlen($formData['thread_title']) > 60) {
                    $errors['thread_title'][] = "The title must be shorter than 60 characters.";
                }
                if (strlen($formData['thread_text']) < 5) {
                    $errors['thread_text'][] = "The content must be longer than 5 characters.";
                }
                if (strlen($formData['thread_text']) > 2000) {
                    $errors['thread_text'][] = "The content must be shorter than 2000 characters.";
                }
                if (empty($errors)) {
                    $dbo = new \Core\Database("forum_threads");
                    $dbo->update([
                        'thread_title' => $formData['thread_title'],
                        'thread_text' => $formData['thread_text'],
                        'user_id' => $user['user_id'],
                        'forum_id' => $thread['forum_id']
                    ], 'thread_id', $thread['thread_id']);
                    $Smarty->assign('success', 1);
                } else {
                    $Smarty->assign('post', $formData);
                    $Smarty->assign('errors', $errors);
                }

            }
            $Smarty->assign('thread', $thread);
            $Smarty->display('Forum/_edit_topic.tpl');
        } else {
            die();
        }
    }

    public function threads(){
	    global $db, $Smarty;

	    $total = $db->query("SELECT COUNT(*) as rows FROM ".DBPREFIX."_forum_threads WHERE forum_id = {$this->params[0]}")->fetch(\PDO::FETCH_OBJ);
	    $pages = \ceil($total->rows / $this->perpage);

	    $current = isset($this->params[1]) ? $this->params[1] : 1;
	    $range  = $this->perpage * ($current - 1);
	
	    $stmt = $db->prepare("SELECT * FROM ".DBPREFIX."_forum_threads WHERE forum_id = {$this->params[0]} ORDER BY thread_id DESC LIMIT :limit, :perpage");
	    $stmt->bindParam(':limit', $range, \PDO::PARAM_INT);
	    $stmt->bindParam(':perpage', $this->perpage, \PDO::PARAM_INT);
	    $stmt->execute();
	    $threads = $stmt->fetchAll(\PDO::FETCH_ASSOC);

	    foreach($threads as $thread_index => $thread){
            $threads[$thread_index]['comments'] = [];
            $comments_sql = $db->query("SELECT * FROM ".DBPREFIX."_comment WHERE controller = 'forum' AND item_id = {$thread['thread_id']} ORDER BY date_posted DESC");
            $thread_comments = $comments_sql->fetchAll(\PDO::FETCH_ASSOC);
            if($thread_comments) {
                $threads[$thread_index]['comments'] = $thread_comments[0];
                $threads[$thread_index]['comment_count'] = count($thread_comments);
            } else {
                $threads[$thread_index]['comments'] = [];
                $threads[$thread_index]['comment_count'] = 0;
            }

        }

		$forum_data_sql = $db->query("SELECT * FROM ".DBPREFIX."_forum WHERE forum_id = {$this->params[0]}");
		$forum_data = $forum_data_sql->fetch(\PDO::FETCH_ASSOC);
		
	    $Smarty->assign('total', $total->rows);
	    $Smarty->assign('pages', $pages);
	    $Smarty->assign('current', $current);
	    $Smarty->assign('forum', $forum_data);
	    $Smarty->assign('threads', $threads);
	    $Smarty->display('Forum/_all_threads.tpl');
    }
    
    public function thread(){
	    global $db, $Smarty;
	
	    $result = $db->query("SELECT * FROM ".DBPREFIX."_forum_threads WHERE thread_id = {$this->params[0]} LIMIT 1");
	
	    $item = $result->fetch(\PDO::FETCH_ASSOC);
	
	    $Language = new \Core\Language();
	
	    $Smarty->assign('Language', $Language);
	    $Smarty->assign('thread', $item);
	    $Smarty->display($this->tempdir.'/_thread.tpl');
    }

}