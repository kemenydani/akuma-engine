<?php
/* Smarty version 3.1.30, created on 2017-05-01 12:15:19
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Video\_view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590726d79c5542_72613003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ce491ad45d10547541a91122f42c19508b90f88' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Video\\_view.tpl',
      1 => 1493640892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Global/_full.tpl' => 1,
    'file:Global/_widget_comment.tpl' => 1,
  ),
),false)) {
function content_590726d79c5542_72613003 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26453590726d79c47c9_81238851', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Global/_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_26453590726d79c47c9_81238851 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="content">
	<br>
    <div class="container">
	<?php if ($_smarty_tpl->tpl_vars['item']->value) {?>
	<h1 class="heading"><?php echo $_smarty_tpl->tpl_vars['item']->value['video_title'];?>
</h1>
		<div class="videoWrapper">
			<iframe src="http://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['item']->value['yt_id'];?>
" frameborder="0" allowfullscreen></iframe>
		</div>
        <?php $_smarty_tpl->_subTemplateRender("file:Global/_widget_comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('controller'=>$_smarty_tpl->tpl_vars['controller']->value,'item_id_key'=>'video_id','item_id'=>$_smarty_tpl->tpl_vars['item']->value['video_id']), 0, false);
?>

		<br>
		<br>
	<?php } else { ?>
	    <div class="msg info">This video does not exists.</div>
	<?php }?>
    </div>
</section>
<?php
}
}
/* {/block 'content'} */
}
