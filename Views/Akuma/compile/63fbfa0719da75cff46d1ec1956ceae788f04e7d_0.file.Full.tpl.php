<?php
/* Smarty version 3.1.30, created on 2017-04-30 09:19:08
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Admin\_full.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5905ac0cb506d1_15640152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63fbfa0719da75cff46d1ec1956ceae788f04e7d' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Admin\\_full.tpl',
      1 => 1480842426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Admin/_index.tpl' => 1,
  ),
),false)) {
function content_5905ac0cb506d1_15640152 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207145905ac0cb4f733_91478466', 'index');
?>



<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Admin/_index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_249725905ac0cb4c051_14101871 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['content']->value;
}
}
/* {/block 'content'} */
/* {block 'pagination'} */
class Block_247895905ac0cb4e4d9_25681250 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'pagination'} */
/* {block 'index'} */
class Block_207145905ac0cb4f733_91478466 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_249725905ac0cb4c051_14101871', 'content', $this->tplIndex);
?>

</div>

<div class="container">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_247895905ac0cb4e4d9_25681250', 'pagination', $this->tplIndex);
?>
  
</div>
    
<?php
}
}
/* {/block 'index'} */
}
