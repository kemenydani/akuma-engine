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

<script>
$(document).on("click", ".toogleAlertDialog", function () {

     var header  = $(this).data('header');
     var message = $(this).data('message');
     var action  = $(this).data('href');

     $(".modal-title").html(header);
     $(".modal-content #modal-content-text").html(message);
     $(".modal-footer #AlertDialogAction").attr('href', action);

});
</script>