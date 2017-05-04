<?php
/* Smarty version 3.1.30, created on 2017-05-01 10:59:06
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Forum\_all.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590714fa1a0ec2_77464797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '102ce61f977dc89073fe20d73de1686ca669c13c' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Forum\\_all.tpl',
      1 => 1492512050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Global/_full.tpl' => 1,
    'file:Forum/_user_area.tpl' => 1,
    'file:Global/page.tpl' => 1,
  ),
),false)) {
function content_590714fa1a0ec2_77464797 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_user')) require_once 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Core\\Assets\\Smarty\\plugins\\function.user.php';
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Core\\Assets\\Smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_relative_date')) require_once 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Core\\Assets\\Smarty\\plugins\\modifier.relative_date.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14280590714fa19fb14_53691479', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Global/_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_14280590714fa19fb14_53691479 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="content" class="">
    <br><br>
    <h1 class="heading">BOARD</h1>

    <div class="container forum-list">
        <?php $_smarty_tpl->_subTemplateRender("file:Forum/_user_area.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php if ($_smarty_tpl->tpl_vars['forums']->value) {?>
            <i class="logout fa fa-bar-chart fa-1x" aria-hidden="true"></i> There are <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 forum threads, <?php echo count($_smarty_tpl->tpl_vars['forums']->value);?>
 of them on this page.
            <br>
            <br>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['forums']->value, 'forum');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['forum']->value) {
?>
                <div class="forum-list-item">
                    <div class="forum-title">
                        <h2><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
forum/threads/<?php echo $_smarty_tpl->tpl_vars['forum']->value['forum_id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['forum']->value['forum_title'];?>
</a></h2>
                        <p><?php echo $_smarty_tpl->tpl_vars['forum']->value['forum_desc'];?>
</p>
                    </div>
                    <div class="last-poster pull-right">
                        <?php if ($_smarty_tpl->tpl_vars['forum']->value['comments'][0]) {?>
                        <i class="logout fa fa-user fa-1x" aria-hidden="true"></i> <?php echo smarty_function_user(array('user_id'=>$_smarty_tpl->tpl_vars['forum']->value['comments'][0]['poster_id']),$_smarty_tpl);?>

                        <p><i><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['forum']->value['comments'][0]['comment_text'],30);?>
</i></p>
                        <p><i class="logout fa fa-clock-o fa-1x" aria-hidden="true"></i> <?php echo smarty_modifier_relative_date($_smarty_tpl->tpl_vars['forum']->value['comments'][0]['date_posted']);?>
</p>
                        <?php }?>
                    </div>
                    <div class="child-count"><h1><?php echo $_smarty_tpl->tpl_vars['forum']->value['threads'];?>
</h1><p>topics</p></div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php } else { ?>
            <center>There are no forum threads.</center>
            <br>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("file:Global/page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('url'=>'forum/all/','total'=>$_smarty_tpl->tpl_vars['total']->value,'pages'=>$_smarty_tpl->tpl_vars['pages']->value,'current'=>$_smarty_tpl->tpl_vars['current']->value), 0, false);
?>

        <br>
    </div>
</section>


<?php
}
}
/* {/block 'content'} */
}
