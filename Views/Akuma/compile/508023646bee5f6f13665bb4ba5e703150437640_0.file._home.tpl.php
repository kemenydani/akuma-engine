<?php
/* Smarty version 3.1.30, created on 2017-05-01 11:45:53
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Admin\_home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59071ff1496c20_78557386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '508023646bee5f6f13665bb4ba5e703150437640' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Admin\\_home.tpl',
      1 => 1493639149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Admin/_full.tpl' => 1,
  ),
),false)) {
function content_59071ff1496c20_78557386 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2333959071ff14960c0_31491105', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Admin/_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_2333959071ff14960c0_31491105 extends Smarty_Internal_Block
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
