<?php
/* Smarty version 3.1.30, created on 2017-04-30 08:37:07
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Forum\_all_threads.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5905a23385cfe8_85964886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccb2685b71ef341895e595988061e222c7fff5f7' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Forum\\_all_threads.tpl',
      1 => 1492512098,
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
function content_5905a23385cfe8_85964886 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Core\\Assets\\Smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_function_user')) require_once 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Core\\Assets\\Smarty\\plugins\\function.user.php';
if (!is_callable('smarty_modifier_relative_date')) require_once 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Core\\Assets\\Smarty\\plugins\\modifier.relative_date.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204315905a23385bb64_64124790', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Global/_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_204315905a23385bb64_64124790 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="content">
    <br><br>
    <h1 class="heading">TOPICS IN <?php echo $_smarty_tpl->tpl_vars['forum']->value['forum_title'];?>
</h1>
    <div class="container forum-list">
        <?php $_smarty_tpl->_subTemplateRender("file:Forum/_user_area.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('forum_id'=>$_smarty_tpl->tpl_vars['forum']->value['forum_id']), 0, false);
?>

        <?php if ($_smarty_tpl->tpl_vars['threads']->value) {?>
            <i class="logout fa fa-bar-chart fa-1x" aria-hidden="true"></i> There are <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 topics in this forum thread, <?php echo count($_smarty_tpl->tpl_vars['threads']->value);?>
 of them on this page.
        <br>
            <br>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['threads']->value, 'thread');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['thread']->value) {
?>
            <div class="forum-list-item">
                <div class="forum-title">
                    <h2><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
forum/thread/<?php echo $_smarty_tpl->tpl_vars['thread']->value['thread_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['Language']->value->url_slug($_smarty_tpl->tpl_vars['thread']->value['thread_title']);?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['thread_title'];?>
</a></h2>
                    <p><i><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['thread']->value['thread_text'],100);?>
</i></p>
                </div>
                <?php if ((count($_smarty_tpl->tpl_vars['thread']->value['comments']))) {?>
                    <div class="last-poster pull-right">
                        <i class="logout fa fa-user fa-1x" aria-hidden="true"></i>  <?php echo smarty_function_user(array('user_id'=>$_smarty_tpl->tpl_vars['thread']->value['comments']['poster_id']),$_smarty_tpl);?>

                        <p><i><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['thread']->value['comments']['comment_text'],30);?>
</i></p>
                        <p><i class="logout fa fa-clock-o fa-1x" aria-hidden="true"></i>  <?php echo smarty_modifier_relative_date($_smarty_tpl->tpl_vars['thread']->value['comments']['date_posted']);?>
</p>
                    </div>
                <?php }?>
                <div class="child-count"><h1><?php echo $_smarty_tpl->tpl_vars['thread']->value['comment_count'];?>
 <i class="logout fa fa-commenting-o fa-1x" aria-hidden="true"></i></h1></div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <br>
            <br>
        <?php } else { ?>
            There are no threads in this forum.
        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender("file:Global/page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('url'=>"forum/threads/".((string)$_smarty_tpl->tpl_vars['location_array']->value[2])."/",'total'=>$_smarty_tpl->tpl_vars['total']->value,'pages'=>$_smarty_tpl->tpl_vars['pages']->value,'current'=>$_smarty_tpl->tpl_vars['current']->value), 0, false);
?>

        <br>
    </div>

</section>
<?php
}
}
/* {/block 'content'} */
}
