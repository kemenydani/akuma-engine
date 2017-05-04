<?php
namespace Controllers;

class Admin {
    use Traits\CommonQueries;

    public $params;

    public function index() {
       global $Smarty;
       
       $Smarty->display('Admin/_home.tpl');
    }
}
