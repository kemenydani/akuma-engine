<?php
/* Smarty version 3.1.30, created on 2017-04-19 07:26:06
  from "E:\_PROJECTS\_WAMP_ROOT\akuma\Views\Akuma\templates\Admin\_breadcrumb.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f7110e2d9145_21791851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '872fee48d5b81f18d6e7ebac7d52afa4ffe1af05' => 
    array (
      0 => 'E:\\_PROJECTS\\_WAMP_ROOT\\akuma\\Views\\Akuma\\templates\\Admin\\_breadcrumb.tpl',
      1 => 1480842426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f7110e2d9145_21791851 (Smarty_Internal_Template $_smarty_tpl) {
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
