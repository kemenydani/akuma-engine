<?php

require_once("core/smarty/Smarty.class.php");

class SmartyACMS extends Smarty {

		// Start up function
		function __construct() {
			parent::__construct();
		
			global $user, $locate, $locate_page, $lang;

			$this->template_dir = 'theme/';
			$this->compile_dir  = 'tmp/templates_c/';
			//$this->cache_dir    = 'tmp/cache/';
			$this->caching = 0;
			// Constants
			$this->assign("base",BASE);
			$this->assign("lang", $lang);
			$this->assign("themebase",template_dir);  
			$this->assign("page",$_REQUEST['page']);
			//global data
			$this->assign("user", $user);
			
				

		}
	
}

