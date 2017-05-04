<?php
/* Smarty version 3.1.30, created on 2017-04-30 18:59:57
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Comment\widget.comment.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5906342d367c97_61448318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f30b54912542fc57c334c6567ed9734b8741296' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Comment\\widget.comment.tpl',
      1 => 1481101790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5906342d367c97_61448318 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_user')) require_once 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Core\\Assets\\Smarty\\plugins\\function.user.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Core\\Assets\\Smarty\\plugins\\modifier.date_format.php';
?>
<h1 class="heading">COMMENTS</h1>
   
<div class="panel">
    <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
    <div class="box">
	<form  class="comment-form" action="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
comment/add/" method="POST">
	    
	    <div class="content-creation">
		
		<div class="comment-avatar">
		    <div class="content">
			<img onerror="imgError(this);" src="<?php if (!$_smarty_tpl->tpl_vars['user']->value['avatar']) {
echo $_smarty_tpl->tpl_vars['base']->value;?>
uploads/nopic.png<?php } else {
echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['user']->value['avatar'];
}?>">
		    </div>
		</div>
		<textarea name="comment_text"></textarea>
		
	    </div>
	    

	    <input type="hidden" name="controller" value="<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
">
	    <input type="hidden" name="item_id_key" value="<?php echo $_smarty_tpl->tpl_vars['item_id_key']->value;?>
">
	    <input type="hidden" name="item_id" value="<?php echo $_smarty_tpl->tpl_vars['item_id']->value;?>
">
	    <input type="hidden" name="poster_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
">
	    <input type="hidden" name="location" value="<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
">

	    <center>
		<button type="submit">Post comment</button>
	    </center>

	</form>
    </div>

    <?php } else { ?>
	<div class="msg info">Commenting is only available for registered users. Please log in or register <a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
user/register/">here</a>.</div>
	<br>
    <?php }?>
    <div class="box comments">
	
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
	    <div class="box-item comment">
		<div class="comment-avatar">
		    
		    <div class="content">
			<img onerror="imgError(this);" src="<?php if (!$_smarty_tpl->tpl_vars['comment']->value['avatar']) {
echo $_smarty_tpl->tpl_vars['base']->value;?>
uploads/nopic.png<?php } else {
echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['comment']->value['avatar'];
}?>">
		    </div>
 
		</div>
		    
		<div class="comment-text">
		    <?php echo smarty_function_user(array('user_id'=>$_smarty_tpl->tpl_vars['comment']->value['poster_id']),$_smarty_tpl);?>
<span class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value['date_posted']);?>
</span>
		    <p><?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_text'];?>
</p>
		</div>   
	    </div>
	<?php
}
} else {
?>

	    <div class="msg info">There are no comments yet. Be the first!</div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	
    </div>
</div><?php }
}
