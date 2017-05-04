<?php
/* Smarty version 3.1.30, created on 2017-05-01 09:22:08
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Admin\search_fields\select.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5906fe40e37130_58564760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7dab4432ccd2f2607a6fe63c560c9fd947a4c0ec' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Admin\\search_fields\\select.tpl',
      1 => 1480842426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5906fe40e37130_58564760 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="input-group input-group-sm">
<span class="input-group-addon" id="label_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['details']->value['display']['label'];?>
</span>
<select 
       name="search[where][<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
][param]" 
       value="<?php if ($_smarty_tpl->tpl_vars['details']->value['value']) {
echo $_smarty_tpl->tpl_vars['details']->value['value'];
}?>"
       class="form-control"
       aria-describedby="label_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"

>
<?php if ($_smarty_tpl->tpl_vars['details']->value['options']) {?>
    <option>(not selected)</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['details']->value['options'], 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
        <option <?php if ($_smarty_tpl->tpl_vars['details']->value['value'] == $_smarty_tpl->tpl_vars['value']->value) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</option>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }?>

</select>
</div>
<input type="hidden" name="search[where][<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
][operator]" value="=">
<!-- field end --><?php }
}
