<?php
/* Smarty version 3.1.30, created on 2017-05-01 09:24:09
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Admin\input_fields\number.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5906feb9528b57_07167110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '760a6b7dfeb46ec0722425135d8b58ed012301d6' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Admin\\input_fields\\number.tpl',
      1 => 1480842426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5906feb9528b57_07167110 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group">

<label class="control-label col-sm-1" for="field_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['details']->value['display']['label'];?>
:</label>
<div class="col-sm-11">
        <input type="number" 
               name="<?php if ($_smarty_tpl->tpl_vars['details']->value['group']) {
echo $_smarty_tpl->tpl_vars['details']->value['group'];?>
[<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
]<?php } else {
echo $_smarty_tpl->tpl_vars['name']->value;
}?>" 
               value="<?php if ($_smarty_tpl->tpl_vars['value']->value) {
echo $_smarty_tpl->tpl_vars['value']->value;
}?>"
               placeholder="<?php if ($_smarty_tpl->tpl_vars['details']->value['display']['placeholder']) {
echo $_smarty_tpl->tpl_vars['details']->value['display']['placeholder'];
}?>" 
               class="form-control"
               id="field_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"
               style="width: 300px;"

        />
        <div class="col-lg-6">
            <div class="row">
                <?php if ($_smarty_tpl->tpl_vars['details']->value['display']['note']) {?>
                    <p class="help-block"><small><?php echo $_smarty_tpl->tpl_vars['details']->value['display']['note'];?>
</small></p>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="col-sm-11 pull-right">
    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['error']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
	    <div class="alert alert-warning" role="alert"><?php echo $_smarty_tpl->tpl_vars['details']->value['display']['label'];?>
: <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
 <?php if (strlen($_smarty_tpl->tpl_vars['value']->value)) {?>(<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
)<?php }?></div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php }?> 
    </div>
</div><?php }
}
