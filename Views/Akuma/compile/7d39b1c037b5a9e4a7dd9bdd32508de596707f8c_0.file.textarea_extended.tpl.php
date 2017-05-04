<?php
/* Smarty version 3.1.30, created on 2017-04-19 10:24:12
  from "E:\_PROJECTS\_WAMP_ROOT\akuma\Views\Akuma\templates\Admin\input_fields\textarea_extended.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f73acc394ae0_95128605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d39b1c037b5a9e4a7dd9bdd32508de596707f8c' => 
    array (
      0 => 'E:\\_PROJECTS\\_WAMP_ROOT\\akuma\\Views\\Akuma\\templates\\Admin\\input_fields\\textarea_extended.tpl',
      1 => 1492367710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f73acc394ae0_95128605 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group">
   
<label class="control-label col-sm-1" for="field_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['details']->value['display']['label'];?>
:</label>
    <div class="col-sm-11">
        
         <button type="button" class="btn btn-success btn-sm pull-left" data-toggle="modal" data-target="#textEditorModal">Start editing</button>
         <div class="clearfix"></div>
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
<!-- field end -->


<div id="textEditorModal" class="modal fade" data-backdrop="static" role="dialog" aria-labelledby="textEditorModalLabel">
    
    <div class="modal-dialog" style="width: 60%;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="textEditorModalLabel">Text editor</h4>
            </div>

            <div class="modal-body" id="textEditorModalContent"  style="height: 100%; overflow-y: scroll;">
                
                <textarea class="form-control" style="height: 600px; resize:vertical;" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" id="field_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" >
                    <?php if ($_smarty_tpl->tpl_vars['value']->value) {
echo $_smarty_tpl->tpl_vars['value']->value;
}?>
                </textarea>
                
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
    
</div>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['includes']->value;?>
libs/tinymce.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
tinymce.init({
    selector: "#field_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
",
    plugins: [
        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
    ],
    content_css : "<?php echo $_smarty_tpl->tpl_vars['etcDir']->value;?>
tinymce/custom_tinymce.css",
    toolbar: " insertfile undo redo | styleselect | fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
    fontsize_formats: "8px 10px 12px 14px 18px 24px 36px",
    setup: function (editor) {
        editor.on('change', function () {
            editor.save();
        });
    }
});
<?php echo '</script'; ?>
>

<!-- tinymce end --><?php }
}
