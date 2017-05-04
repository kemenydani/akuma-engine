<?php
namespace Controllers;

class Filemanager {

    use Traits\controllerExtension;
    use Traits\Layout;

    public function admin() {
        global $Smarty;
        $Smarty->display('Admin/filemanager/_index.tpl');
    }



}