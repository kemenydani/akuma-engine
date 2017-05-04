<?php
/* Smarty version 3.1.30, created on 2017-04-19 10:12:52
  from "E:\_PROJECTS\_WAMP_ROOT\akuma\Views\Akuma\templates\Admin\_filter_list_bar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f73824f24015_29625383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4561223c539c8150f17f6dfb39aa3539eb73292e' => 
    array (
      0 => 'E:\\_PROJECTS\\_WAMP_ROOT\\akuma\\Views\\Akuma\\templates\\Admin\\_filter_list_bar.tpl',
      1 => 1480842426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f73824f24015_29625383 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_field')) require_once 'E:\\_PROJECTS\\_WAMP_ROOT\\akuma\\Core\\Assets\\Smarty\\plugins\\function.field.php';
?>
<div class="panel panel-default" style="">
    
        <form class="navbar-form form-group-sm" method="GET" action="<?php echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['controller']->value;?>
/admin/">
            
            <?php if (($_smarty_tpl->tpl_vars['search']->value == true)) {?>
              
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'field', false, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['field']->value) {
?>
                    <?php if (($_smarty_tpl->tpl_vars['field']->value['operations']['search'] == true)) {?>
                        
                        <?php echo smarty_function_field(array('dir'=>'Admin/search_fields/','type'=>$_smarty_tpl->tpl_vars['field']->value['type'],'name'=>$_smarty_tpl->tpl_vars['name']->value,'details'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl);?>

                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


            <?php }?>
            
            <?php if (($_smarty_tpl->tpl_vars['order']->value == true)) {?>
                
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'field', false, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['field']->value) {
?>
                        <?php if (($_smarty_tpl->tpl_vars['field']->value['order'])) {?>
                                <?php echo smarty_function_field(array('dir'=>'Admin/fields/','type'=>"order",'name'=>$_smarty_tpl->tpl_vars['name']->value,'details'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl);?>

                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


            <?php }?>
            
            <span class="pull-right ">
                
                <a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['method_url']->value;?>
">
                    <button type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-retweet" aria-hidden="true"></span></button>
                </a>
                <button type="submit" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                
            </span>
                    <div class="clearfix"></div>
        </form>
   
</div><?php }
}
