<?php
/* Smarty version 3.1.30, created on 2017-04-30 09:19:10
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Admin\_breadcrumb.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5905ac0e979ff0_11379761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1983f56b84a85d766fb382ae6c0b98bbb533746b' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Admin\\_breadcrumb.tpl',
      1 => 1480842426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5905ac0e979ff0_11379761 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="breadcrumb">
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
admin/">Admin panel</a></li>
    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->tpl_vars['i']->value < count($_smarty_tpl->tpl_vars['location_array']->value)) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < count($_smarty_tpl->tpl_vars['location_array']->value); $_smarty_tpl->tpl_vars['i']->value++) {
?>
	<?php if (($_smarty_tpl->tpl_vars['i']->value == 0)) {?>
	    <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['location_array']->value[$_smarty_tpl->tpl_vars['i']->value];?>
/admin/"><?php echo $_smarty_tpl->tpl_vars['location_array']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</a></li>
	<?php } else { ?>
	    <li class="active"><?php echo $_smarty_tpl->tpl_vars['location_array']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</li>
	<?php }?>

    <?php }
}
?>

</ol><?php }
}
