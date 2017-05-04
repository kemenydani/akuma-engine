<span style="display:none;">{$type} {$preview}</span>

<button type="button" class="btn btn-success btn-sm" data-toggle="modal" id="file_upload_button" data-target="#FileUploadModal">Upload files</button>

<!-- Modal -->
<div class="modal fade" id="FileUploadModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Upload images</h4>
      </div>
      <div class="modal-body">

         <div id="upload" class="form-inline">

         <div class="form-group" style="width: 100%;">
            <input type="file" style="width: 85%;" id="file" name="file[]" class="form-control" required multiple>
            <button type="button" id="submit" name="submit" class="btn btn-default pull-right">Submit</button>
         </div>

         </div>        
         <br>
         <div id="progress" style="display: none;" class="progress">
            <div id="pb" class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
         </div>

         <div id="uploads">

         </div>

      </div>

    </div>
  </div>
</div>  
   
<script type="text/javascript" src="{$jsbase}fileuploader.js"></script>
<script type="text/javascript">

document.getElementById('file_upload_button').addEventListener('click', function(e){
   
   //SET FUNCTIONAL ELEMENTS
   var options = {
      files: document.getElementById('file'),
      processor: "{$base}{$processor}/upload/",
      progress: document.getElementById('progress'),
      progressBar: document.getElementById('pb'),
      outPutArea: document.getElementById('uploads'),
      folder: '{$folder}',
   };

   //RESET EVRYTHING
   options.progressBar.style.width = "0%";
   options.outPutArea.innerHTML = "";
   
   document.getElementById('file').addEventListener('change', function(e){
      //RESET EVRYTHING WHEN NEW FILES WERE CHOOSEN
      options.progressBar.style.width = "0%";
      options.progress.style.display = "none";
      options.outPutArea.innerHTML = "";
   });
 
   document.getElementById('submit').addEventListener('click', function(e){
      e.preventDefault();

      app.uploader({
          files: options.files,
          folder: options.folder,
          progressArea: options.progress,
          progressBar: options.progressBar,
          out: options.outPutArea,
          processor: options.processor,

          finished: function(data){

               if(data.succeded > 0){
                  options.outPutArea.innerHTML = '<div class="alert alert-success" role="alert">'+data.succeded+' Files were uploaded succesfully!<div>';
               }

               if(data.failed !== ""){

                  var i;

                  for(i=0; i<data.failed.length; i++){
                     err_item = document.createElement('div');
                     err_item.innerHTML = '<div class="alert alert-danger" role="alert">'+data.failed[i].error_msg+' - '+data.failed[i].name+'</div>';
                     options.outPutArea.appendChild(err_item);
                  }

               }

               //form.reset();

            },
                    
            error: function(){
               console.log('Not working');
            }

      }); //APP OBJECT
     
   }); //SUBMIT
 
}); //IMG UP BUTTON
</script>