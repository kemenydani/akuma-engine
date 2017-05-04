<?php
/* Smarty version 3.1.30, created on 2017-05-01 10:59:13
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Forum\_thread.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59071501813307_49058497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '855bdd1b32ecc8a9eb3753c55f776f5f6b51ca2e' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Forum\\_thread.tpl',
      1 => 1492527802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Global/_full.tpl' => 1,
    'file:Global/_widget_comment.tpl' => 1,
  ),
),false)) {
function content_59071501813307_49058497 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25625590715018123b3_52719627', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Global/_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_25625590715018123b3_52719627 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="content">
    <div class="container">
		<br><br>
		<h1><?php echo $_smarty_tpl->tpl_vars['thread']->value['thread_title'];?>
</h1>
		<hr>
		<?php if ($_smarty_tpl->tpl_vars['user']->value['user_id'] == $_smarty_tpl->tpl_vars['thread']->value['user_id'] || $_smarty_tpl->tpl_vars['user']->value['level'] == 10) {?>
			<button onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
forum/edit_thread/<?php echo $_smarty_tpl->tpl_vars['thread']->value['thread_id'];?>
/'"class="button button-dark button-medium">Edit</button>
			<?php if ($_smarty_tpl->tpl_vars['user']->value['level'] == 10) {?>
				
				
			<?php }?>
			<hr>
		<?php }?>
	    <p class="text-justify"><b><?php echo $_smarty_tpl->tpl_vars['thread']->value['thread_text'];?>
</b></p>
    </div>
	<br>
	<?php $_smarty_tpl->_subTemplateRender("file:Global/_widget_comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'item_id_key'=>'thread_id','item_id'=>$_smarty_tpl->tpl_vars['thread']->value['thread_id']), 0, false);
?>

</section>
<?php
}
}
/* {/block 'content'} */
}
