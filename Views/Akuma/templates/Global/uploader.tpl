<style>
   
</style>

<!-- HTML -->
<form action="" method="post" enctype="multipart/form-data">
   <div class="form-group">
      <div class="col-lg-10 col-sm-10 col-xs-10">
         <input type="file" id="file" name="file[]" class="form-control" multiple="multiple">
      </div>
      <div class="col-lg-2 col-sm-2 col-xs-2">
         <input type="submit" id="submit" value="Upload" class="btn btn-success">
      </div>
   </div>
</form>

<div id="upload-progress" class="progress">
   <div id="progressbar" class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<!-- HTML END -->

<script>
var handleUpload = function(event){
   event.preventDefault(); //prevent the default event of input submit
   event.stopPropagation(); //prevent the default event of input submit

   var fileInput = document.getElementById('file'); //variable for the selected files 
   //console.log(fileInput.files);
   
   var data = new FormData(); //object - holds the data
   //console.log(data);
   
   for(var i = 0; i < fileInput.files.length; ++i){ //loop trough all files
      //console.log(fileInput.files[i]);
      data.append('file[]', fileInput.files[i]); //append files to the data object
   }
   
   var request = new XMLHttpRequest(); //Open ajax request
   
   //EventHandlers ---------------
   
   request.upload.addEventListener('progress', function(event){ //percentage, progressbar
      if(event.lengthComputable){
         
         var percent = event.loaded / event.total;
         var progress = document.getElementById('progressbar');
         
         while(progress.hasChildNodes()){
            progress.removeChild(progress.firstChild);
         }
         
         progress.appendChild(document.createTextNode(Math.round(percent * 100) + ' %'));
         
      }
   });
   
   request.upload.addEventListener('load', function(event){ //called when upload is finished
      document.getElementById('progressbar').style.display = 'none'; 
      
   });
   
   request.upload.addEventListener('error', function(event){
      alert('Upload failed');
   });
   
   //actual upload
   
   request.open('POST', '{$base}uploader/upload/');
   request.setRequestHeader('CacheControl', 'no-cache');
   document.getElementById('progressbar').style.display = 'block'; 
   request.send(data);
   
   
};

window.addEventListener('load', function(event){
   var submit = document.getElementById('submit');
   submit.addEventListener('click', handleUpload);
});

</script>