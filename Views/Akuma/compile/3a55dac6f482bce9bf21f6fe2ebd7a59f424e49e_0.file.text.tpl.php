<?php
/* Smarty version 3.1.30, created on 2017-05-01 09:14:53
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Admin\search_fields\text.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5906fc8dce74c3_28341503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a55dac6f482bce9bf21f6fe2ebd7a59f424e49e' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Admin\\search_fields\\text.tpl',
      1 => 1480842426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5906fc8dce74c3_28341503 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="input-group input-group-sm">
<span class="input-group-addon" id="label_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['details']->value['display']['label'];?>
</span>
<input type="text" 
       name="search[where][<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
][param]" 
       value="<?php if ($_smarty_tpl->tpl_vars['details']->value['value']) {
echo $_smarty_tpl->tpl_vars['details']->value['value'];
}?>"
       placeholder="<?php if ($_smarty_tpl->tpl_vars['details']->value['display']['placeholder']) {
echo $_smarty_tpl->tpl_vars['details']->value['display']['placeholder'];
}?>" 
       class="form-control"
       aria-describedby="label_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"
       />
</div>
<select value="" class="form-control" name="search[where][<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
][operator]">
    <?php if ($_smarty_tpl->tpl_vars['details']->value['value_type'] == 'string') {?>
    <option value="LIKE">Is like</option>
    <option value="NOT LIKE">Not like</option>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['details']->value['value_type'] == 'integer') {?>
    <option value="=">Egyenlő</option>
    <option value="<">Kisebb</option>
    <option value=">">Nagyobb</option>
    <option value="!=">Nem egyenlő</option>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['details']->value['value_type'] == 'boolean') {?>
    <option value="1">Igaz</option>
    <option value="0">Hamis</option>
    <?php }?>
</select>
<!-- field end --><?php }
}
