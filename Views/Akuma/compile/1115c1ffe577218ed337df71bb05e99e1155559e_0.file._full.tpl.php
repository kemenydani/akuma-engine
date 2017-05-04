<?php
/* Smarty version 3.1.30, created on 2017-04-29 07:48:58
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Global\_full.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5904456a357344_18143551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1115c1ffe577218ed337df71bb05e99e1155559e' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Global\\_full.tpl',
      1 => 1489344350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Global/_index.tpl' => 1,
  ),
),false)) {
function content_5904456a357344_18143551 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_252515904456a355f81_43526796', 'Index');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Global/_index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_127545904456a354379_71620709 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['content']->value;
}
}
/* {/block 'content'} */
/* {block 'Index'} */
class Block_252515904456a355f81_43526796 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <!-- FULL START -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127545904456a354379_71620709', 'content', $this->tplIndex);
?>

    <!-- FULL END -->
    
<?php
}
}
/* {/block 'Index'} */
}
