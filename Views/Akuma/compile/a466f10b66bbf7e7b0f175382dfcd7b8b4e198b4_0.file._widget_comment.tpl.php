<?php
/* Smarty version 3.1.30, created on 2017-05-01 10:59:13
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Global\_widget_comment.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590715018d7313_08017931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a466f10b66bbf7e7b0f175382dfcd7b8b4e198b4' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Global\\_widget_comment.tpl',
      1 => 1492510356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Forum/_user_area.tpl' => 1,
  ),
),false)) {
function content_590715018d7313_08017931 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_user')) require_once 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Core\\Assets\\Smarty\\plugins\\function.user.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Core\\Assets\\Smarty\\plugins\\modifier.date_format.php';
?>
<div class="container comment-container">

    <h1 style="" class="heading">COMMENTS</h1>

    <?php $_smarty_tpl->_subTemplateRender("file:Forum/_user_area.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
        <form  class="comment-form" action="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
comment/add/" method="POST">
            <textarea name="comment_text"></textarea>
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
            <button type="submit" class="button button-dark button-big">Post comment</button>
        </form>
    <?php }?>
    <br>
    <div class="comments">
        <?php $_smarty_tpl->_assignInScope('comments', $_smarty_tpl->tpl_vars['Comment']->value->find(array("controller = '".((string)$_smarty_tpl->tpl_vars['controller']->value)."'","item_id = ".((string)$_smarty_tpl->tpl_vars['item_id']->value))));
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
            <div class="comment">
                <img onerror="imgError(this);" src="<?php if (!$_smarty_tpl->tpl_vars['comment']->value['avatar']) {
echo $_smarty_tpl->tpl_vars['base']->value;?>
uploads/nopic.png<?php } else {
echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['comment']->value['avatar'];
}?>">
                <div class="comment-text">
                    <div class="poster-details">
                        <span class="comment-poster"><?php echo smarty_function_user(array('user_id'=>$_smarty_tpl->tpl_vars['comment']->value['poster_id']),$_smarty_tpl);?>
</span><span class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value['date_posted']);?>
</span>
                    </div>
                    <p><?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_text'];?>
</p>
                </div>
            </div>
            <?php
}
} else {
?>

            <center>There are no comments yet. Be the first!</center>
            <br><br>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </div>
</div><?php }
}
