<?php
/* Smarty version 3.1.30, created on 2017-05-01 09:23:39
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Admin\_full.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5906fe9b97b692_76314253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8350b830b3e7cda2386ac207800fe48a73b87ca' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Admin\\_full.tpl',
      1 => 1493630618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Admin/_index.tpl' => 1,
  ),
),false)) {
function content_5906fe9b97b692_76314253 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_286605906fe9b97a683_18038864', 'index');
?>



<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Admin/_index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_7745906fe9b976d96_31498526 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['content']->value;
}
}
/* {/block 'content'} */
/* {block 'pagination'} */
class Block_199115906fe9b9793a3_84280320 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'pagination'} */
/* {block 'index'} */
class Block_286605906fe9b97a683_18038864 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7745906fe9b976d96_31498526', 'content', $this->tplIndex);
?>

</div>

<div class="container">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199115906fe9b9793a3_84280320', 'pagination', $this->tplIndex);
?>
  
</div>
    
<?php
}
}
/* {/block 'index'} */
}
