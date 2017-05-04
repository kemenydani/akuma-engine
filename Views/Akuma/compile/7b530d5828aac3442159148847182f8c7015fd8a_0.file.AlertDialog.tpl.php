<?php
/* Smarty version 3.1.30, created on 2017-04-19 10:12:53
  from "E:\_PROJECTS\_WAMP_ROOT\akuma\Views\Akuma\templates\Admin\_alert_dialog.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f73825070942_88900562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b530d5828aac3442159148847182f8c7015fd8a' => 
    array (
      0 => 'E:\\_PROJECTS\\_WAMP_ROOT\\akuma\\Views\\Akuma\\templates\\Admin\\_alert_dialog.tpl',
      1 => 1480842426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f73825070942_88900562 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="AlertDialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <div id="modal-content-text">
                    <!-- modal content -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a href="" id="AlertDialogAction">
                    <button type="button" class="btn btn-primary">Accept</button>
                </a>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
$(document).on("click", ".toogleAlertDialog", function () {

     var header  = $(this).data('header');
     var message = $(this).data('message');
     var action  = $(this).data('href');

     $(".modal-title").html(header);
     $(".modal-content #modal-content-text").html(message);
     $(".modal-footer #AlertDialogAction").attr('href', action);

});
<?php echo '</script'; ?>
><?php }
}
