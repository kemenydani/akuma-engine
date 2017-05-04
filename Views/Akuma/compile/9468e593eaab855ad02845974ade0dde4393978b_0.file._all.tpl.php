<?php
/* Smarty version 3.1.30, created on 2017-04-19 10:12:29
  from "E:\_PROJECTS\_WAMP_ROOT\akuma\Views\Akuma\templates\Downloads\_default_item_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f7380da7e8a3_32608639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9468e593eaab855ad02845974ade0dde4393978b' => 
    array (
      0 => 'E:\\_PROJECTS\\_WAMP_ROOT\\akuma\\Views\\Akuma\\templates\\Downloads\\_default_item_list.tpl',
      1 => 1492540297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Global/_full.tpl' => 1,
    'file:Global/page.tpl' => 1,
  ),
),false)) {
function content_58f7380da7e8a3_32608639 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\_PROJECTS\\_WAMP_ROOT\\akuma\\Core\\Assets\\Smarty\\plugins\\modifier.truncate.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2645858f7380da796f0_09158748', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Global/_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_2645858f7380da796f0_09158748 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="content">
    <br>
    <br>
    <h1 class="heading">DOWNLOADS</h1>
    <br>
    <div class="container files-container">

        <?php if ($_smarty_tpl->tpl_vars['files']->value) {?>
        <div class="file-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['files']->value, 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>
            <div class="file-list-item">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
downloads/download/<?php echo $_smarty_tpl->tpl_vars['file']->value['download_id'];?>
/"><h2><i class="logout fa fa-download fa-1x" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['file']->value['download_name'];?>
</h2></a>
                <i class="logout fa fa-bar-chart fa-1x" aria-hidden="true"></i> Downloaded <?php echo $_smarty_tpl->tpl_vars['file']->value['download_count'];?>
 times - <i class="logout fa fa-file fa-1x" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['file']->value['size'];?>

                <br>
                <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['file']->value['download_desc'],200);?>
</p>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
        <?php } else { ?>
        <br>
        <center>There are no files at the moment.</center>
        <br>
        <br>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("file:Global/page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('url'=>'downloads/all/','total'=>$_smarty_tpl->tpl_vars['total']->value,'pages'=>$_smarty_tpl->tpl_vars['pages']->value,'current'=>$_smarty_tpl->tpl_vars['current']->value), 0, false);
?>

    </div>
</section>
<?php
}
}
/* {/block 'content'} */
}
