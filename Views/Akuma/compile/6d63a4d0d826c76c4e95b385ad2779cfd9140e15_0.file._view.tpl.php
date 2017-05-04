<?php
/* Smarty version 3.1.30, created on 2017-04-29 09:23:11
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\About\_view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59045b7fb7c386_44880043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d63a4d0d826c76c4e95b385ad2779cfd9140e15' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\About\\_view.tpl',
      1 => 1491489392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Global/_full.tpl' => 1,
  ),
),false)) {
function content_59045b7fb7c386_44880043 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1381559045b7fb7b6c0_44964166', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Global/_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_1381559045b7fb7b6c0_44964166 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section id="content">

    <br>

    <h1 class="heading">ABOUT US</h1>

    <div class="container">


        <?php if ($_smarty_tpl->tpl_vars['about']->value) {?>
        <p><?php echo $_smarty_tpl->tpl_vars['about']->value['about_long'];?>
</p>
        <?php } else { ?>
        There is no about text yet.
        <?php }?>

        <br>
    </div>

</section>

<?php
}
}
/* {/block 'content'} */
}
