<div class="form-group">
    <template id="VideoThumbnailImage">
        <div class="pull-left" style="margin-right: 15px;"><img class=" img-thumbnail" src="%%url%%"></div>
    </template>    
<label class="control-label col-sm-1" for="field_{$name}">{$details.display.label}</label>
    <div class="col-sm-11">
        
        <div class="input-group">
            <input type="text" 
                class="form-control"

                name="{$name}" 
                id="field_{$name}" 

                value="{if $value}{$value}{/if}"
                placeholder="{if $details.display.placeholder}{$details.display.placeholder}{/if}" 

            />
            <span class="input-group-btn">
                <button type="button" onclick="yt.fieldData();" class="btn btn-success btn-sm">Get video details</button>
            </span>
        </div>
                
        <input name="thumbnails" id="thumbs" value="" type="hidden">        
        <div id="VideoThumbnails"><hr></div>  
        
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
{if $value}
<script>
  $( document ).ready(function() {
      yt.fieldData(); 
      
      

      
  });

        $("#field_{$name}").keyup(function() {
 alert("Key up detected");
});
  
</script>
{/if}
<script>
var options = {
    field : document.getElementById('field_{$name}'),
    thumbs : document.getElementById('thumbs'),
    templates : {
        thumbnail : document.getElementById('VideoThumbnailImage')
    }
}

function getYoutubeVideoDetails(options) {
    
    var self = this;
    this.O = options;
   
    this.obtainFieldData = function(){
        return $.ajax({
            type: "POST",
            data: {
               'url' : this.value
            },
            url: '{$base}video/youtubedata/',
            dataType: 'json'
        }).promise();
    },
    
    this.fetchResponse = function (){
        this.obtainFieldData().done(function(results){

            if(results.thumbs){
                var template = $.trim($(self.O.templates.thumbnail).html());
               
                var items = {
                    default: results.thumbs.default,
                    medium: results.thumbs.medium,
                    high: results.thumbs.high
                };
               
               self.displayResults(items, template);
            }
            
        });
    },
    
    this.displayResults = function(items, template){
        $(this.O.thumbs).val(JSON.stringify(items));
        $("#VideoThumbnails").html("");
        $.each(items, function(index, obj) {
            
            var matches = [];
            var modified = template;
            
            
            
            for(var key in obj) { //for each key
               var keyreg = new RegExp(key,"g");
               matches[key] = template.match(keyreg);
               if(matches[key]){
                  for(i = 0; i < matches[key].length; i++){
                     modified = modified.replace( '%%'+matches[key][i]+'%%', obj[key]); 
                  }
               }  
            }

            self.appendTemp(modified);
            
        }); 
        
    },
    
    this.appendTemp = function(items){
        $("#VideoThumbnails").css('display','none').append(items).fadeIn(300);
    },
    
    this.fieldData = function(){
        this.field = this.O.field;
        this.value = this.O.field.value;
        this.templates = this.O.templates;
        this.fetchResponse();
    }
    
}

var yt = new getYoutubeVideoDetails(options);

</script>