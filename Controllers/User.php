<?php

namespace Controllers;

class User {

    use Traits\controllerExtension;
    use Traits\Layout;
    use Shared;
    
    public $dbh;
    public $params;
    public $name = 'User';
    public $tempdir = 'User';
    public $table = 'users';
    public $table_key = 'user_id';
    public $perpage = 20;
    public static $db_table = 'xyz_users';
    
    public function index() {
        $this->all();
    }

    public function savepicturechange(){
        global $db;
        
        $db->query('UPDATE xyz_users SET avatar = "'.$_POST['path'].'" WHERE user_id = "'.$_POST['user_id'].'"');

        die(json_encode($_POST));
    }
    
    public function editprofile(){
        global $Smarty, $db, $user;
        
        $formData = filter_input_array(INPUT_POST);
        $error = [];
        $cfg = new \Core\Config($this->name);
        $dbo = new \Core\Database($this->table);

        if($formData){

	    if(!$formData['email']){
                $errors['email'][] = "This field is required.";
            }

	    $total = $db->query("SELECT COUNT(*) as existing_email FROM xyz_users WHERE user_id != {$user['user_id']} AND email = '{$formData['email']}'")->fetch(\PDO::FETCH_OBJ);
            if($total->existing_email){
                $errors['email'][] = "This email is already in use.";
            }
	    
            if(empty($errors)){
               $dbo->update($formData, "user_id", $user['user_id']);
               $Smarty->assign('success', 'Succesfully updated!');
            } else {
               $Smarty->assign('errors', $errors);
            }
            
        }
	
		$Smarty->assign("countries", include __ROOT__.'/Core/countries.php');
        $Smarty->display('User/_edit_profile.tpl');
    }
    
    public function add(){
        global $Smarty;
        
        $formData = filter_input_array(INPUT_POST);
        $errors = [];
        $cfg = new \Core\Config($this->name);
        $dbo = new \Core\Database($this->table);
        
	$criterias = [
	    'username' => ['unique','required'],
	    'email' => ['unique','required'],
	    'password' => ['required'],
	];
	
        if($formData){
            
	    foreach($formData as $field_name => $field_value){
		if(array_key_exists($field_name, $criterias)){
		    foreach($criterias[$field_name] as $criteria){
			$error = $this->Validate($field_name, $field_value, $criteria);
			if($error){
			    $errors[$field_name][] = $error;
			}
		    }
		}
	    }

            if(empty($errors)){
		$formData['password'] = password_hash($formData['password'], PASSWORD_DEFAULT);
		$dbo->insert($formData);
		$Smarty->assign('message', 'Succesfully created!');
            } else {
		$Smarty->assign('data', $formData);
		$Smarty->assign('errors', $errors);
            }
            
        }
        
        $Smarty->assign('fields', $cfg->Fields);
        $Smarty->display('Admin/_default_edit_form_fields.tpl');
    }
    
    public function edit(){
	global $Smarty;

        $this->id = $this->params[0];
        $formData = \filter_input_array(\INPUT_POST);
        $dbo = new \Core\Database($this->table);
        $cfg = new \Core\Config($this->name);
	$dbo->query('SELECT * FROM '.$dbo->Table.' WHERE '.$this->table_key.' = '.$this->id.' ');
        $item = $dbo->fetch();
	
	if($item === false){ 
	    header('Location:' . BASE . $this->name .'/admin/' );	    
	};
	
	$criterias = [
	    'username' => ['unique','required'],
	    'email' => ['unique','required'],
	    'password' => ['required'],
	];
	
	if($formData){

	    foreach($formData as $field_name => $field_value){
		if(array_key_exists($field_name, $criterias)){
		    foreach($criterias[$field_name] as $criteria){
			$error = $this->Validate($field_name, $field_value, $criteria, $item[$field_name]);
			if($error){
			    $errors[$field_name][] = $error;
			}
		    }
		}
	    }
	    
	    if(empty($errors)){
		if($formData['change_password'] == 1){
		    $formData['password'] = password_hash($formData['password'], PASSWORD_DEFAULT);
		}
		unset($formData['change_password']);
               $dbo->update($formData, $this->table_key, $this->id);
               $Smarty->assign('message', 'Succesfully edited!');
            } else {
	       $Smarty->assign('data', $formData);
               $Smarty->assign('errors', $errors);
            }
	    
	}
        
        $Smarty->assign("fields", $cfg->Fields);
        $Smarty->assign("item", $item);
        $Smarty->display('Admin/_default_edit_form_fields.tpl');
 
	
	/*
        $this->defaultEditLayout([
	    'username' => ['unique','required'],
	    'email' => ['unique','required'],
	    'password' => ['required'],
	]);
	*/
    }
    
    public function profile(){
        global $db, $Smarty;
 
        $result = $db->query("SELECT * FROM xyz_users WHERE user_id = '".$this->params[0]."'");
        
        if($item = $result->fetch(\PDO::FETCH_ASSOC)) {
	    
            //$result2 = $db->query("SELECT * FROM xyz_blog WHERE user_id = '".$this->params[0]."' AND active = 1 ORDER BY date_posted DESC LIMIT 3");
            //$blogs = $result2->fetchAll(\PDO::FETCH_ASSOC);
            $result3 = $db->query("SELECT * FROM xyz_comment WHERE poster_id = '".$this->params[0]."' ORDER BY date_posted DESC LIMIT 6");
            $usercomments = $result3->fetchAll(\PDO::FETCH_ASSOC);
            
            $Smarty->assign("usercomments", $usercomments);
            //$Smarty->assign("blogs", $blogs);
            $Smarty->assign("details", $item);
            $Smarty->display("User/_profile.tpl");
            
        } else {
            //no user
        }
    }

    public function admin(){
        $this->page = $this->params[0];
        $this->defaultListLayout([
            'table' => $this->table,
            'pages' => true,
            'search' => true,
            'order_field' => 'user_id',
            'order_dir' => 'DESC',
            'display' => [
                'tpl' => 'Admin/_default_item_list',
                'table' => [
                    ['key'=>'user_id', 'title' => 'Id'],
                    ['key'=>'username', 'title' => 'Name'],
                    ['key'=>'date_joined', 'title' => 'Date registered'],
                ]
            ]  
        ]);
  
    }
    
    
    public function login(){
        global $Smarty, $db;
        $formData = filter_input_array(INPUT_POST);
        
        if(filter_input_array(INPUT_POST)){
            
            if(!$formData['username']){
                $errors['username'][] = "This field is required.";
            }
            
            if(!$formData['password']){
                $errors['password'][] = "This field is required.";
            }

            $result = $db->query("SELECT * FROM xyz_users WHERE username = '{$formData['username']}'");
            
            if(!($user = $result->fetch(\PDO::FETCH_ASSOC))){
                $errors['username'][] = "This user does not exists.";
            }
            
            if(!password_verify($formData['password'], $user['password'])){
                $errors['password'][] = "Invalid password.";
            }
            
            if(empty($errors)){
                
                $user['ip'] = $_SERVER['REMOTE_ADDR'];
                if ($remember) {
                    $user['session_expires'] = date('U') + 30758400; // year
                        //  session_set_cookie_params(365);
                } else {
                    $user['session_expires'] = date('U') + 30758400;
                }
                
                session_start();

                $user['session_id'] = session_id();
                $db->query("DELETE FROM xyz_sessions WHERE session_id=\"".$user['session_id']."\"");
                $db->query("INSERT INTO xyz_sessions (`user_id`,`session_id`,`session_time`,`session_expires`,`ip`) VALUES('".(int)$user['user_id']."','".$user['session_id']."',NOW(),FROM_UNIXTIME(".$user['session_expires']."),'".$user['ip']."')");
                $db->query("INSERT INTO xyz_sessions_log (`user_id`,`ip`,`timestamp`) VALUES ('".$user['user_id']."','".$user['ip']."',NOW())");
                header('Location:' .BASE);
                return $user;
                
            } else {
                die(json_encode($errors));
            }
  
        } else {
            header('Location:' .BASE);
        }

        
    }
    
    public function logout(){
        global $db;
	    session_start();
	    $db->query("DELETE FROM xyz_sessions WHERE session_id=\"".session_id()."\" LIMIT 1");
        header('Location:' .$_SERVER['HTTP_REFERER']);
    }
    
    public function check_session(){
        global $db;
        session_start();
        // get user data and convert times to usefull time stamps
        // Delete all expired sessions
        $db->query("DELETE FROM xyz_sessions WHERE session_expires < NOW()");

        $result = $db->query ('SELECT u.*, s.*, '
        .'UNIX_TIMESTAMP(session_expires) as session_expires,'
        .'UNIX_TIMESTAMP(last_seen) as last_seen '
        .'FROM xyz_sessions s '
        .'LEFT JOIN xyz_users u ON s.user_id > 0 AND s.user_id=u.user_id '
        .'WHERE s.session_id="'.session_id().'"');
        
        if (!($session = $result->fetch(\PDO::FETCH_ASSOC))) {
            $db->query("INSERT INTO xyz_sessions (`user_id`,`session_id`,`session_time`,`session_expires`,`ip`) VALUES(0,'".session_id()."',NOW(),NOW() + INTERVAL 30758400 SECOND, '".$_SERVER['REMOTE_ADDR']."')");
            return false; // no session data, terminate here
        }
        // If guest session, then exit here
        if (!$session['user_id']) return false;
        $update = "";
        $session_expires = date('U') + 30758400;
        if ($session_expires > $session['session_expires']) {
            // extend session time
            $user['session_expires'] = $session_expires;
            $update .= ", session_expires=FROM_UNIXTIME('".$user['session_expires']."')";
        }
        //ip changed (reconnected)
        if ($_SERVER['REMOTE_ADDR'] != $session['ip']) {
            $session['ip'] = $_SERVER['REMOTE_ADDR'];
            $update .= ", ip=\"".$session['ip']."\"";
            $db->query("INSERT INTO xyz_sessions_log (`user_id`,`ip`,`timestamp`) VALUES ('".$session['user_id']."','".$session['ip']."',NOW())");
        }
        $db->query("UPDATE xyz_sessions SET session_time=NOW() $update WHERE session_id=\"".session_id()."\" LIMIT 1");
        $db->query("UPDATE xyz_users SET last_seen=NOW() WHERE user_id='".$session['user_id']."' LIMIT 1"); // update last seen

        return $session;
    }
    
    public function verify_recover(){
	global $Smarty, $db;
	$requester = $this->find(["email = '".$this->params[0]."'"], 1);
	//var_dump($this->params[1]);
	//var_dump(md5($requester['temp_password']));
	if(md5($requester['temp_password']) !== (string)$this->params[1]){
	    echo "Something went wrong during the password verification process. Please contact the webmaster.";
	} else {
	    $db->query('UPDATE xyz_users SET password = "'.$requester['temp_password'].'" WHERE temp_password = "'.$requester['temp_password'].'"');
	    $db->query('UPDATE xyz_users SET temp_password = "" WHERE temp_password = "'.$requester['temp_password'].'"');
	    header("Location: " .BASE);
	}
    }
    
    public function changepw(){
	global $Smarty, $db, $user;
	$formData = filter_input_array(INPUT_POST);

	if(filter_input_array(INPUT_POST)){

	    if($user['user_id'] == $this->params[0]){
		$secret_key = (new \Controllers\Settings)->find(['variable_name = "capcha_secret_key"'], 1);
		if(!isset($formData['g-recaptcha-response'])){
		    $errors['recaptcha'][] = "Please use the recaptcha.";
		} else {

		    $secret = $secret_key['setting_value'];
		    $ip = $_SERVER['REMOTE_ADDR'];
		    $captcha = $formData['g-recaptcha-response'];
		    $resp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
		    $arr = json_decode($resp, true);

		    if($arr['success']){

		    } else {
			$errors['recaptcha'][] = "The recapctha was wrong.";
		    }
		}

		if(!$formData['password']){
		    $errors['password'][] = "This field is required.";
		}

		if(!$formData['password_new']){
		    $errors['password_new'][] = "This field is required.";
		}

		if(!$formData['password_new_again']){
		    $errors['password_new_again'][] = "This field is required.";
		}

		if($formData['password_new'] != $formData['password_new_again']){
		    $errors['password_new'][] = "The passwords must match.";
		    $errors['password_new_again'][] = "The passwords must match.";
		}

		if(strlen($formData['password_new']) < 4){
		    $errors['password'][] = "The password must be longer than 4 characters.";
		}

		if(empty($errors)){
		    $hash = password_hash($formData['password_new'],PASSWORD_DEFAULT);
		    $db->query('UPDATE xyz_users SET password = "'.$hash.'" WHERE user_id = "'.$this->params[0].'"');

			$Smarty->assign('success', 1);


		} else {
		   $Smarty->assign('errors', $errors);
		}
	    }
	}
	
	$Smarty->display("User/_change_password.tpl");
    }
    
    public function recover(){
	    global $Smarty, $db;
	    $formData = filter_input_array(INPUT_POST);
        if(filter_input_array(INPUT_POST)){
	        $secret_key = (new \Controllers\Settings)->find(['variable_name = "capcha_secret_key"'], 1);
            if(!isset($formData['g-recaptcha-response'])){
                $errors['recaptcha'][] = "Please use the recaptcha.";
            } else {
                $secret = $secret_key['setting_value'];
                $ip = $_SERVER['REMOTE_ADDR'];
                $captcha = $formData['g-recaptcha-response'];
                $resp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
                $arr = json_decode($resp, true);
                if($arr['success']){
                    
                } else {
                    $errors['recaptcha'][] = "The recapctha was wrong.";
                }
	        }
	        if(!$formData['email']){
                $errors['email'][] = "This field is required.";
            }
	        $total = $db->query("SELECT COUNT(*) as existing_email FROM xyz_users WHERE email = '{$formData['email']}'")->fetch(\PDO::FETCH_OBJ);
            if(!$total->existing_email){
                $errors['email'][] = "This email does not exists in our database.";
            }
            if(!$formData['password']){
                $errors['password'][] = "This field is required.";
            }
            if(!$formData['password_again']){
                $errors['password_again'][] = "This field is required.";
            }
            if($formData['password'] != $formData['password_again']){
                $errors['password'][] = "The passwords must match.";
                $errors['password_again'][] = "The passwords must match.";
            }
            if(strlen($formData['password']) < 4){
                $errors['password'][] = "The password must be longer than 4 characters.";
            }
	        if(empty($errors)){
                $hash = password_hash($formData['password'],PASSWORD_DEFAULT);
                $db->query('UPDATE xyz_users SET temp_password = "'.$hash.'" WHERE email = "'.$formData['email'].'"');
                $url = "http://" . $_SERVER['SERVER_NAME'] . preg_replace('/[^\/]*$/','',$_SERVER["PHP_SELF"]) . "user/verify_recover/".$formData['email']."/".md5($hash);
                $details = [
                    'sender_email' => 'kemenydani93@gmail.com',
                    'recipient' => $formData['email'],
                    'sender_name' => 'Venko Gaming',
                    'contact_name' => $formData['email'],
                    'subject' => 'Password Recovery',
                    'message' => "<p><b>Dear Venko Gaming user!</b><br><br>This is an automated message from Venko Gaming. If you did not recently initiate the password recovery process, please disregard this email.<br>If you initiated the password recovery, please <a href=\"".$url."\">click here to change your password to: <b>".$formData['password']."</b></a>. <br>After clicking this link, you will be able to log in with you new password.<br><br> <b>Regards, Venko Gaming</b></p>"
                    //'message' => "Dear Venko Gaming user! <br/><br/> This is an automated message from Venko Gaming. If you did not recently initiate the password recovery process, please disregard this email.<br/><br/>If you initiated the password recovery, please click <a href=\"https://www.facebook.com/\">HERE</a> to verify.<br><br> After clicking this link, you will be able to log in with you new password.",
                ];
                if($this->send_email($details)){
                    $Smarty->assign('success', 1);
                }
            } else {
               $Smarty->assign('errors', $errors);
            }
	    }
	    $Smarty->display("User/_recover.tpl");
    }
 
    public function send_email($details){

	$mail = new \PHPMailer;
	
	$recipient = $this->find(["email = '".$details['recipient']."'"], 1);

	$mail->setFrom($details['sender_email'], $details['sender_name']);
	
	$mail->addAddress($recipient['email'], $recipient['username']);

	$mail->addReplyTo($details['sender_email'], "Reply");

	$mail->isHTML(true);

	$mail->Subject = $details['subject'];
	$mail->Body = $details['message'];
	$mail->AltBody = $details['message'];

	if(!$mail->send()) 
	{
	    return false;
	} 
	else 
	{
	    return true;
	}

    }

    public function register(){
        global $Smarty, $db;
        
        $formData = filter_input_array(INPUT_POST);
        
        if(filter_input_array(INPUT_POST)){
	    $secret_key = (new \Controllers\Settings)->find(['variable_name = "capcha_secret_key"'], 1);
            if(!isset($formData['g-recaptcha-response'])){
                $errors['recaptcha'][] = "Please use the recaptcha.";
            } else {
                
                $secret = $secret_key['setting_value'];
                $ip = $_SERVER['REMOTE_ADDR'];
                $captcha = $formData['g-recaptcha-response'];
                $resp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
                $arr = json_decode($resp, true);
               
                if($arr['success']){
                    
                } else {
                    $errors['recaptcha'][] = "The recapctha was wrong.";
                } 
            }
            
            if(!$formData['username']){
                $errors['username'][] = "This field is required.";
            }
            /*
            if(!$formData['security_question']){
                $errors['security_question'][] = "The security details are required.";
            }
            
            if(!$formData['security_answer']){
                $errors['security_question'][] = "The security details are required.";
            }
            */
            if(!$formData['email']){
                $errors['email'][] = "This field is required.";
            }
            
            if(!$formData['password']){
                $errors['password'][] = "This field is required.";
            }
            
            if(!$formData['password_again']){
                $errors['password_again'][] = "This field is required.";
            }
            
            if($formData['password'] != $formData['password_again']){
                $errors['password'][] = "The passwords must match.";
                $errors['password_again'][] = "The passwords must match.";
            }
            
            if(strlen($formData['username']) < 2){
                $errors['username'][] = "The username must be longer than 2 characters.";
            }
            
            if(strlen($formData['username']) > 20){
                $errors['username'][] = "The username must be shorter.";
            }
            
            if(strlen($formData['password']) < 4){
                $errors['password'][] = "The password must be longer than 4 characters.";
            }
            
            $total = $db->query("SELECT COUNT(*) as existing_user FROM xyz_users WHERE username = '{$formData['username']}'")->fetch(\PDO::FETCH_OBJ);
            if($total->existing_user){
                $errors['username'][] = "existing user";
            }
            $total = $db->query("SELECT COUNT(*) as existing_email FROM xyz_users WHERE email = '{$formData['email']}'")->fetch(\PDO::FETCH_OBJ);
            if($total->existing_email){
                $errors['email'][] = "existing email";
            }
            
            if(empty($errors)){
               $dbo = new \Core\Database($this->table);
               $dbo->insert([
                   'username' => $formData['username'],
                   'email' => $formData['email'],
                   'password' => password_hash($formData['password'], PASSWORD_DEFAULT)
               ]);
               $Smarty->assign('success', 1);
            } else {
               
               $Smarty->assign('errors', $errors);
            }
            
        }
        
        $Smarty->assign('data', $formData);
        $Smarty->display("User/_register.tpl");
    }

}