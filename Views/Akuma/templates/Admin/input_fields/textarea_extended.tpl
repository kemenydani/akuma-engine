<div class="form-group">
   
<label class="control-label col-sm-1" for="field_{$name}">{$details.display.label}:</label>
    <div class="col-sm-11">
        
         <button type="button" class="btn btn-success btn-sm pull-left" data-toggle="modal" data-target="#textEditorModal">Start editing</button>
         <div class="clearfix"></div>
         <div class="col-lg-6">
            <div class="row">
                {if $details.display.note}
                    <p class="help-block"><small>{$details.display.note}</small></p>
                {/if}
            </div>
        </div>
    </div>
    <div class="col-sm-11 pull-right">
    {if $error}
	{foreach $error as $item}
	    <div class="alert alert-warning" role="alert">{$details.display.label}: {$item} {if strlen($value)}({$value}){/if}</div>
	{/foreach}
    {/if} 
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
                
                <textarea class="form-control" style="height: 600px; resize:vertical;" name="{$name}" id="field_{$name}" >
                    {if $value}{$value}{/if}
                </textarea>
                
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
    
</div>

<script type="text/javascript" src="{$includes}libs/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "#field_{$name}",
    plugins: [
        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
    ],
    content_css : "{$etcDir}tinymce/custom_tinymce.css",
    toolbar: " insertfile undo redo | styleselect | fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
    fontsize_formats: "8px 10px 12px 14px 18px 24px 36px",
    setup: function (editor) {
        editor.on('change', function () {
            editor.save();
        });
    }
});
</script>

<!-- tinymce end -->