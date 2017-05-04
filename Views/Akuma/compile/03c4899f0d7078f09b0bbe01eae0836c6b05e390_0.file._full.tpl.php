<?php
/* Smarty version 3.1.30, created on 2017-04-19 07:32:26
  from "E:\_PROJECTS\_WAMP_ROOT\akuma\Views\Akuma\templates\Global\_full.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f7128a47d979_66566963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03c4899f0d7078f09b0bbe01eae0836c6b05e390' => 
    array (
      0 => 'E:\\_PROJECTS\\_WAMP_ROOT\\akuma\\Views\\Akuma\\templates\\Global\\_full.tpl',
      1 => 1489344350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Global/_index.tpl' => 1,
  ),
),false)) {
function content_58f7128a47d979_66566963 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_323658f7128a479d54_13826091', 'Index');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Global/_index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_1208758f7128a473df8_93670229 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['content']->value;
}
}
/* {/block 'content'} */
/* {block 'Index'} */
class Block_323658f7128a479d54_13826091 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <!-- FULL START -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1208758f7128a473df8_93670229', 'content', $this->tplIndex);
?>

    <!-- FULL END -->
    
<?php
}
}
/* {/block 'Index'} */
}
