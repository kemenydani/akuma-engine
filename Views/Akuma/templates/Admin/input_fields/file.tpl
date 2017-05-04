<div class="form-group">

<label class="control-label col-sm-1" for="field_{$name}">{$details.display.label}</label>
    <div class="col-sm-11">
        <div class="input-group">

            <span class="input-group-btn">
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#{$name}_fileMgr">Browse Files</button>
            </span>
            <input value="{if $value}{$value}{/if}" type="text" class="form-control" name="{$name}" id="field_{$name}" placeholder="Browse Files">
            
        </div>
            
        <div class="col-lg-6">
            <div class="row">
                {if $details.display.note}
                    <p class="help-block"><small>{$details.display.note}</small></p>
                {/if}
            </div>
        </div>
            
    </div
    <div class="col-sm-11 pull-right">
    {if $error}
	{foreach $error as $item}
	    <div class="alert alert-warning" role="alert">{$details.display.label}: {$item} {if strlen($value)}({$value}){/if}</div>
	{/foreach}
    {/if} 
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="{$name}_fileMgr" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" style="width: 90%" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Filemanager</h4>
      </div>
      <div class="modal-body" style="margin: 0px;">
          <div class="row">
		<iframe  width="100%" height="700px" id="theframe" frameborder="0" src="{$base}Core/Assets/ResponsiveFileUploader/dialog.php?type=2&field_id=field_{$name}&relative_url=1"></iframe>
<script>
    function responsive_filemanager_callback(field_id){
        var url=jQuery('#'+field_id).val();
        $('#'+field_id).val(url);
        $("#{$name}_fileMgr").modal('toggle');
    }
</script>
              <script>
                  var _theframe = document.getElementById("theframe");
                  _theframe.contentWindow.location.href = _theframe.src;
              </script>
                {*
		<iframe  width="100%" height="550" frameborder="0"
                     src="{$base}filemanager/dialog.php?type=1&field_id=field_{$name}&relative_url=1">
                </iframe>
		*}
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>        
        