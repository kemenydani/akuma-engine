<?php
/* Smarty version 3.1.30, created on 2017-05-01 11:48:48
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Downloads\_all.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590720a089f975_96233943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25acbcbc97c74f54945a9303fd284eec032c503e' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Downloads\\_all.tpl',
      1 => 1493542107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Global/_full.tpl' => 1,
    'file:Global/page.tpl' => 1,
  ),
),false)) {
function content_590720a089f975_96233943 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Core\\Assets\\Smarty\\plugins\\modifier.truncate.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28826590720a089e324_01207313', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Global/_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_28826590720a089e324_01207313 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="content">
    <br>
    <br>
    <h1 class="heading">DOWNLOADS</h1>
    <br>
    <div class="container files-container">

        <div id="login" class="login-area">
            <form id="login-form" action="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
downloads/" method="GET">
                <?php $_smarty_tpl->_assignInScope('categories', $_smarty_tpl->tpl_vars['Categories']->value->find());
?>
                <div id="login-form-inputs">
                    <select name="category">
                        <option disabled="disabled" selected="selected">Select a category</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                            <option <?php if ($_smarty_tpl->tpl_vars['category_id']->value && $_smarty_tpl->tpl_vars['category_id']->value == $_smarty_tpl->tpl_vars['category']->value['category_id']) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
                </div>
                <div class="">
                    <button class="button button-dark button-medium" type="submit">Filter <i class="fa fa-filter"></i></button>
                    <button class="button button-dark button-medium" onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
downloads/'" type="button">Reset <i class="fa fa-refresh"></i></button>
                </div>
            </form>
        </div>
        <br>

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
                <?php $_smarty_tpl->_assignInScope('category', $_smarty_tpl->tpl_vars['Categories']->value->find(array("category_id = ".((string)$_smarty_tpl->tpl_vars['file']->value['category'])),1));
?>
                <i class="logout fa fa-bar-chart fa-1x" aria-hidden="true"></i>Downloaded <?php echo $_smarty_tpl->tpl_vars['file']->value['download_count'];?>
 times <i class="fa fa-filter"></i> <?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>
 - <i class="logout fa fa-file fa-1x" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['file']->value['size'];?>

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
        <?php $_smarty_tpl->_assignInScope('searchurl', '');
?>
        <?php if ($_smarty_tpl->tpl_vars['category_id']->value) {?>
            <?php $_smarty_tpl->_assignInScope('searchurl', "?category=".((string)$_smarty_tpl->tpl_vars['category_id']->value));
?>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("file:Global/page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('url'=>'downloads/all/','searchurl'=>$_smarty_tpl->tpl_vars['searchurl']->value,'total'=>$_smarty_tpl->tpl_vars['total']->value,'pages'=>$_smarty_tpl->tpl_vars['pages']->value,'current'=>$_smarty_tpl->tpl_vars['current']->value), 0, false);
?>

        <br>
    </div>
</section>
<?php
}
}
/* {/block 'content'} */
}
