<?php

namespace Core;
require_once __ROOT__.'/Core/Assets/Smarty/Smarty.class.php';

class SmartySetup extends \Smarty {

   public static $templateDir;
   public static $url;
   
   public function initSmarty() {
        global $user;
        parent::__construct();
  
        $this->setTemplateDir('Views/'.self::$templateDir.'/templates/')
             ->setCompileDir('Views/'.self::$templateDir.'/compile/')
             ->setConfigDir('Views/'.self::$templateDir.'/configs/')
             ->setCacheDir('Views/'.self::$templateDir.'/cache/');

        $this->compile_check = true;

        $this->assign("base", BASE);
        $this->assign("location", self::$url);
        $this->assign("user", $user);

        $arr = \explode('/', \rtrim(self::$url, '/'));

        $this->assign("location_array", $arr);
        $this->assign("method_url", $arr[0] . '/' . $arr[1] . '/');
        $this->assign("controller", $arr[0]);

        $Language = new \Core\Language();
        $this->assign("Language", $Language);

        $this->assign("templates", BASE.'Views/'.self::$templateDir.'/templates/');
        $this->assign("includes", BASE.'Views/'.self::$templateDir.'/includes/');

	    $this->assign('Team', new \Controllers\Teams());
	    $this->assign('Video', new \Controllers\Video());
	    $this->assign('News', new \Controllers\News());
	    $this->assign('Sponsor', new \Controllers\Partners());
	    $this->assign('Gallery', new \Controllers\Gallery());
	    $this->assign('Member', new \Controllers\Members());
	    //$Smarty->assign('Product', new \Controllers\Products());
	    $this->assign('Settings', new \Controllers\Settings());
	    $this->assign('Stream', new \Controllers\Stream());
	    $this->assign('Adv', new \Controllers\Adv());
	    $this->assign('Country', new \Core\Country());
	    $this->assign('About', new \Controllers\About());
        $this->assign('Comment', new \Controllers\Comment());
	    $this->assign('Categories', new \Controllers\Categories());
        $this->debugging = false;

	}
}