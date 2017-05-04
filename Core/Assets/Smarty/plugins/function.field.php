<?php

function smarty_function_field($params){
    global $Smarty;
//        var_dump($Smarty->template_dir[0] . '/' . $params['dir'] . $params['type'].'.tpl');
//        die();
    if (file_exists($Smarty->template_dir[0] . '/' . $params['dir'] . $params['type'].'.tpl')) {
        
            foreach ($params as $key => &$val) $Smarty->assign($key, $val);
            return $Smarty->fetch($params['dir'] . $params['type'] . ".tpl");
            
     } else 
            return;

}
