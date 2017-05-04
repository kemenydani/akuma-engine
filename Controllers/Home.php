<?php

namespace Controllers;

class Home {
    
    use Traits\CommonQueries;

    public $params;

    public function index() {
	global $Smarty;
	
	$Smarty->display('Global/_home.tpl');
    }

}