<?php

function smarty_function_widget($params){
    global $Smarty;
        
    if (file_exists('Controllers/Widgets/widget.'.$params['name'].'.php')){
            include_once 'Controllers/Widgets/widget.'.$params['name'].'.php';
            if (!function_exists("widget_".$params['name'])) return;
            return call_user_func("widget_".$params['name'], $params);
    // Template Widgets		
    } else if (file_exists($Smarty->template_dir[0] . $params['dir']. '/' . 'widget.'.$params['name'].'.tpl')) {

            foreach ($params as $key => &$val) $Smarty->assign($key, $val);
            return $Smarty->fetch($params['dir']. '/' . "widget.".$params['name'].".tpl");

    } else if ($params['template'] && file_exists($Smarty->template_dir[0] . $params['dir']. '/' . $params['template'])) {

            foreach ($params as $key => &$val) $Smarty->assignByRef($key, $val);
            return $Smarty->fetch($params['dir']. '/' . $params['template']);				
    } else 
            return;

}
