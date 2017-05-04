<?php

namespace Controllers;

class Contact {
    use Traits\controllerExtension;
    use Traits\Layout;
    use Shared;
    
    public $dbh;
    public $params;
    public $name = 'Contact';
    public $tempdir = 'Contact';
    public $table = 'contact';
    public $table_key = 'contact_id';
    public $perpage = 5;
    public static $db_table = 'xyz_contact';
   
    public function index(){
	$this->send();
    }
    
    public function send(){
       global $Smarty;
        

        $formData = filter_input_array(INPUT_POST);
        $errors = [];
        if(filter_input_array(INPUT_POST)){
            
	    $secret_key = (new \Controllers\Settings)->find(['variable_name = "capcha_secret_key"'], 1);

	    if(!isset($formData['g-recaptcha-response'])){
                $errors['recaptcha'][] = "Please use the recaptcha.";
            } else {
                
                $secret = $secret_key['setting_value'];
		//var_dump($secret); die();
                $ip = $_SERVER['REMOTE_ADDR'];
                $captcha = $formData['g-recaptcha-response'];
                $resp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
                $arr = json_decode($resp, true);
               
                if($arr['success']){
                    
                } else {
                    $errors['recaptcha'][] = "The recapctha was wrong.";
                } 
            }
	    
            if(!$formData['recipient']){
                $errors['recipient'][] = "This field is required.";
            }
	    
	    if(!$formData['sender_email']){
                $errors['sender_email'][] = "This field is required.";
            }
	    
	    if(!$formData['sender_name']){
                $errors['sender_name'][] = "This field is required.";
            }
	    
	    if(!$formData['message']){
                $errors['message'][] = "This field is required.";
            }
	    
	    if(!$formData['subject']){
                $errors['subject'][] = "This field is required.";
            }
	    
            if(empty($errors)){
		//$dbo = new \Core\Database($this->table);
		
		if($this->send_email($formData)){
		    $Smarty->assign('success', 1);
		}
            } else {
               $Smarty->assign('errors', $errors);
            }
            
        }
        
       $Smarty->assign('data', $formData);
       $Smarty->assign("contacts", $this->find());
       $Smarty->display('Contact/index.tpl');
       
   }
   
    public function admin(){
        $this->page = $this->params[0];
        $this->defaultListLayout([
            'table' => $this->table,
            'pages' => true,
            'search' => true,
            'order_field' => 'contact_id',
            'order_dir' => 'DESC',
            'display' => [
                'tpl' => 'Admin/All',
                'table' => [
                    ['key'=>'contact_id', 'title' => 'Id'],
                    ['key'=>'contact_name', 'title' => 'Title'],
                ]
            ]  
        ]);
  
    }
   
    public function add(){
	$this->defaultAddLayout([
	    'contanct_name' => ['required'],
	    'contact_email' => ['required'],
	]);
    }
    
    public function edit(){
        $this->defaultEditLayout([
	    'contanct_name' => ['required'],
	    'contact_email' => ['required'],
	]);
    }
   
    public function send_email($details){

	
	$mail = new \PHPMailer;
	
	$recipient = $this->find(["user_id = {$details['recipient']}"], 1);

	$mail->setFrom($details['sender_email'], $details['sender_name']);
	
	$mail->addAddress($recipient['email'], $recipient['contact_name']);

	$mail->addReplyTo($details['sender_email'], "Reply");

	$mail->isHTML(true);

	$mail->Subject = $details['subject'];
	$mail->Body = "<i>{$details['message']}</i>";
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
   
}
