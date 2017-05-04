<?php
/* Smarty version 3.1.30, created on 2017-04-19 10:34:58
  from "E:\_PROJECTS\_WAMP_ROOT\akuma\Views\Akuma\templates\Admin\input_fields\file.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f73d52db77f7_63370634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '692c78adfbf217bd596d8c7ac49d5f0cae2c045b' => 
    array (
      0 => 'E:\\_PROJECTS\\_WAMP_ROOT\\akuma\\Views\\Akuma\\templates\\Admin\\input_fields\\file.tpl',
      1 => 1492598097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f73d52db77f7_63370634 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group">

<label class="control-label col-sm-1" for="field_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['details']->value['display']['label'];?>
</label>
    <div class="col-sm-11">
        <div class="input-group">

            <span class="input-group-btn">
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_fileMgr">Browse Files</button>
            </span>
            <input value="<?php if ($_smarty_tpl->tpl_vars['value']->value) {
echo $_smarty_tpl->tpl_vars['value']->value;
}?>" type="text" class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" id="field_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" placeholder="Browse Files">
            
        </div>
            
        <div class="col-lg-6">
            <div class="row">
                <?php if ($_smarty_tpl->tpl_vars['details']->value['display']['note']) {?>
                    <p class="help-block"><small><?php echo $_smarty_tpl->tpl_vars['details']->value['display']['note'];?>
</small></p>
                <?php }?>
            </div>
        </div>
            
    </div
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
<!-- Modal -->
<div class="modal fade" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_fileMgr" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" style="width: 90%" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Filemanager</h4>
      </div>
      <div class="modal-body" style="margin: 0px;">
          <div class="row">
		<iframe  width="100%" height="700px" id="theframe" frameborder="0" src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
Core/Assets/ResponsiveFileUploader/dialog.php?type=2&field_id=field_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
&relative_url=1"></iframe>
<?php echo '<script'; ?>
>
    function responsive_filemanager_callback(field_id){
        var url=jQuery('#'+field_id).val();
        $('#'+field_id).val(url);
        $("#<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_fileMgr").modal('toggle');
    }
<?php echo '</script'; ?>
>
              <?php echo '<script'; ?>
>
                  var _theframe = document.getElementById("theframe");
                  _theframe.contentWindow.location.href = _theframe.src;
              <?php echo '</script'; ?>
>
                
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>        
        <?php }
}
