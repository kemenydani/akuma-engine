<?php
/* Smarty version 3.1.30, created on 2017-05-01 12:02:44
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\News\_view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590723e4df26d8_75411546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6c619575ca32347ea48743b012911db4551fb31' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\News\\_view.tpl',
      1 => 1493640163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Global/_full.tpl' => 1,
    'file:Global/_widget_comment.tpl' => 1,
  ),
),false)) {
function content_590723e4df26d8_75411546 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3808590723e4df19e3_34565733', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Global/_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_3808590723e4df19e3_34565733 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="content">
	<br>
	<br>
    <div class="container">
	    <h1><?php echo $_smarty_tpl->tpl_vars['item']->value['news_title'];?>
</h1>
	    <hr>
	    <p class="text-justify"><b><?php echo $_smarty_tpl->tpl_vars['item']->value['news_quote'];?>
</b></p>
	    <br>
	    <p><?php echo $_smarty_tpl->tpl_vars['item']->value['news_long'];?>
</p>
	    <hr>
        <?php $_smarty_tpl->_subTemplateRender("file:Global/_widget_comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'item_id_key'=>'news_id','item_id'=>$_smarty_tpl->tpl_vars['item']->value['news_id']), 0, false);
?>

		<br>
		<br>
    </div>
</section>
<?php
}
}
/* {/block 'content'} */
}
