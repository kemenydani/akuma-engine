<?php
/* Smarty version 3.1.30, created on 2017-05-01 07:09:45
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Admin\_home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5906df39b7f2f9_43030025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdf6d3e429ef09e99f5fb388052d59d65ec1b4c3' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Admin\\_home.tpl',
      1 => 1480842426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Admin/_full.tpl' => 1,
  ),
),false)) {
function content_5906df39b7f2f9_43030025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_230045906df39b7e222_01706509', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Admin/_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_230045906df39b7e222_01706509 extends Smarty_Internal_Block
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
