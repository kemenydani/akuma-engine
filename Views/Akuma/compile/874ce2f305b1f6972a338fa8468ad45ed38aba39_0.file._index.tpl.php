<?php
/* Smarty version 3.1.30, created on 2017-05-01 09:23:39
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Admin\filemanager\_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5906fe9b9631a6_52285358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '874ce2f305b1f6972a338fa8468ad45ed38aba39' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Admin\\filemanager\\_index.tpl',
      1 => 1493624329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Admin/_full.tpl' => 1,
  ),
),false)) {
function content_5906fe9b9631a6_52285358 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100565906fe9b962522_11203457', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Admin/_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_100565906fe9b962522_11203457 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="row"> 
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">
                <iframe  width="100%" id="theframe" height="700px" frameborder="0" src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
Core/Assets/ResponsiveFileUploader/dialog.php?type=0&lang=en_EN"></iframe>
                <?php echo '<script'; ?>
>
                    var _theframe = document.getElementById("theframe");
                    _theframe.contentWindow.location.href = _theframe.src;
                <?php echo '</script'; ?>
>
            </div>
        </div>               
    
    </div>      
</div> 

<?php
}
}
/* {/block 'content'} */
}
