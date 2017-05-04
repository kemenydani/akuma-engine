<?php
/* Smarty version 3.1.30, created on 2017-04-19 10:12:55
  from "E:\_PROJECTS\_WAMP_ROOT\akuma\Views\Akuma\templates\Admin\input_fields\textarea.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f73827a09c54_02308807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfde906fe29eddffaea56c199ba80a571ede3248' => 
    array (
      0 => 'E:\\_PROJECTS\\_WAMP_ROOT\\akuma\\Views\\Akuma\\templates\\Admin\\input_fields\\textarea.tpl',
      1 => 1480842426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f73827a09c54_02308807 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group">
    
<label class="control-label col-sm-1" for="field_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['details']->value['display']['label'];?>
:</label>
    <div class="col-sm-11">
        
        <textarea class="form-control" rows="4" style="height: 100%; resize:vertical;" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" id="field_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['value']->value) {
echo $_smarty_tpl->tpl_vars['value']->value;
}?></textarea>
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
</div>
    <div class="clearfix"></div>
<!-- field end --><?php }
}
