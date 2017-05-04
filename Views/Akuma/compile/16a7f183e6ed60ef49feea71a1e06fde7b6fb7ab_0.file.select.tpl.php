<?php
/* Smarty version 3.1.30, created on 2017-04-19 10:12:55
  from "E:\_PROJECTS\_WAMP_ROOT\akuma\Views\Akuma\templates\Admin\input_fields\select.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f73827c24e58_87400312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16a7f183e6ed60ef49feea71a1e06fde7b6fb7ab' => 
    array (
      0 => 'E:\\_PROJECTS\\_WAMP_ROOT\\akuma\\Views\\Akuma\\templates\\Admin\\input_fields\\select.tpl',
      1 => 1480842426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f73827c24e58_87400312 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group">

<label class="control-label col-sm-1" for="field_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['details']->value['display']['label'];?>
:</label>
    <div class="col-sm-11">

        <select style="width: 300px; <?php if ($_smarty_tpl->tpl_vars['details']->value['display']['multiple']) {?>height: 100px;<?php }?>" <?php if ($_smarty_tpl->tpl_vars['details']->value['display']['multiple']) {?>multiple="multiple"<?php }?>
               name="<?php echo $_smarty_tpl->tpl_vars['name']->value;
if ($_smarty_tpl->tpl_vars['details']->value['display']['multiple']) {?>[]<?php }?>" 
               value="<?php if ($_smarty_tpl->tpl_vars['value']->value) {
echo $_smarty_tpl->tpl_vars['value']->value;
}?>"
               class="form-control"
               aria-describedby="label_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"

        >
        
        <?php if ($_smarty_tpl->tpl_vars['details']->value['options']) {?>
            
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['details']->value['options'], 'optval', false, 'optkey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['optkey']->value => $_smarty_tpl->tpl_vars['optval']->value) {
?>
                 
                <?php if (isset($_smarty_tpl->tpl_vars['value']->value) && is_array(json_decode($_smarty_tpl->tpl_vars['value']->value))) {?>
                    
                    <?php $_smarty_tpl->_assignInScope('value_array', json_decode($_smarty_tpl->tpl_vars['value']->value));
?>

                    <?php if (in_array($_smarty_tpl->tpl_vars['optval']->value,$_smarty_tpl->tpl_vars['value_array']->value)) {?>
                        <?php $_smarty_tpl->_assignInScope('found_key', array_search($_smarty_tpl->tpl_vars['optval']->value,$_smarty_tpl->tpl_vars['value_array']->value));
?>
                    <?php }?>
                    
                    <option <?php if ((isset($_smarty_tpl->tpl_vars['value_array']->value) && ($_smarty_tpl->tpl_vars['optval']->value == $_smarty_tpl->tpl_vars['value_array']->value[$_smarty_tpl->tpl_vars['found_key']->value]))) {?> selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['optval']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['optkey']->value;?>
</option> 
                    
                <?php } else { ?>
                    <option <?php if (($_smarty_tpl->tpl_vars['optval']->value == $_smarty_tpl->tpl_vars['value']->value)) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['optval']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['optkey']->value;?>
</option> 
                <?php }?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            
        <?php }?>

        </select>
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
