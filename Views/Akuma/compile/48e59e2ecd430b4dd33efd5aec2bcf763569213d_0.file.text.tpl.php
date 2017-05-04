<?php
/* Smarty version 3.1.30, created on 2017-04-30 09:19:14
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Admin\input_fields\text.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5905ac12358701_93658271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48e59e2ecd430b4dd33efd5aec2bcf763569213d' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Admin\\input_fields\\text.tpl',
      1 => 1480842426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5905ac12358701_93658271 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group">

<label class="control-label col-sm-1" for="field_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['details']->value['display']['label'];?>
</label>
    <div class="col-sm-11">
        
        <input type="text" 
            class="form-control"
            
            name="<?php if ($_smarty_tpl->tpl_vars['details']->value['input_group']) {
echo $_smarty_tpl->tpl_vars['details']->value['input_group'];?>
[<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
]<?php } else {
echo $_smarty_tpl->tpl_vars['name']->value;
}?>" 
            id="field_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" 

            value="<?php if ($_smarty_tpl->tpl_vars['value']->value) {
echo $_smarty_tpl->tpl_vars['value']->value;
}?>"
            placeholder="<?php if ($_smarty_tpl->tpl_vars['details']->value['display']['placeholder']) {
echo $_smarty_tpl->tpl_vars['details']->value['display']['placeholder'];
}?>" 

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
</div>
<!-- field end --><?php }
}
