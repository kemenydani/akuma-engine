<?php
/* Smarty version 3.1.30, created on 2017-04-29 07:49:00
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Global\page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5904456c71ee73_50472106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e6bdaa02a93d9fe9e69150c176b7bb1c050cf78' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Global\\page.tpl',
      1 => 1492255108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5904456c71ee73_50472106 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['pages']->value > 1) {?>

<div class="container pagination-container">

    <ul class="pagination">

        <li class="<?php if (($_smarty_tpl->tpl_vars['current']->value-1 < 1)) {?>disabled<?php }?>">
            <a href="<?php if (($_smarty_tpl->tpl_vars['current']->value > 1)) {
echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['url']->value;
echo $_smarty_tpl->tpl_vars['current']->value-1;?>
/<?php echo $_smarty_tpl->tpl_vars['searchurl']->value;
}?>" aria-label="Previous">prev</a>
        </li>

        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['pages']->value) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['pages']->value; $_smarty_tpl->tpl_vars['i']->value++) {
?>
        <li class="<?php if (($_smarty_tpl->tpl_vars['i']->value+1 == $_smarty_tpl->tpl_vars['current']->value)) {?>active<?php }?>">
            <a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['url']->value;
echo $_smarty_tpl->tpl_vars['i']->value+1;?>
/<?php echo $_smarty_tpl->tpl_vars['searchurl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</a>
        </li>
        <?php }
}
?>


        <li class="<?php if ($_smarty_tpl->tpl_vars['current']->value == $_smarty_tpl->tpl_vars['pages']->value) {?>disabled<?php }?>">
            <a href="<?php if ($_smarty_tpl->tpl_vars['current']->value < $_smarty_tpl->tpl_vars['pages']->value) {
echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['url']->value;
echo $_smarty_tpl->tpl_vars['current']->value+1;?>
/<?php echo $_smarty_tpl->tpl_vars['searchurl']->value;
}?>" aria-label="Next">next</a>
        </li>

    </ul>

    <div class="clearfix"></div>

</div>

<?php }
}
}
