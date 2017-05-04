<?php
/* Smarty version 3.1.30, created on 2017-04-19 08:38:16
  from "E:\_PROJECTS\_WAMP_ROOT\akuma\Views\Akuma\templates\Admin\_home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f721f8e3f023_74339582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bcd8747a03354b342da25418574d77cf94767a6' => 
    array (
      0 => 'E:\\_PROJECTS\\_WAMP_ROOT\\akuma\\Views\\Akuma\\templates\\Admin\\_home.tpl',
      1 => 1480842426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Admin/_full.tpl' => 1,
  ),
),false)) {
function content_58f721f8e3f023_74339582 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1793058f721f8e3b689_55502945', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Admin/_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_1793058f721f8e3b689_55502945 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="row"> 
    <div class="col-md-12">
                   
	
	<div class="container">
	  <div class="jumbotron">
	    <h1>Welcome <?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</h1> 
	    <p>This is the startpage of the admin-center</p> 
	  </div>
	</div>
	
	
    </div>      
</div> 

<?php
}
}
/* {/block 'content'} */
}
