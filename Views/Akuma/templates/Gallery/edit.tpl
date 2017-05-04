{extends file="Admin/full.tpl"}
{block name=content}
<style type="text/css">
.masoitem {

width: 25%;
overflow: hidden;
min-height: 100px;

}
.masoitem img{
width: 100%;


}
/*
.firefox-form-fix {
    
 
    height: 35px;
    line-height: 35px;
    padding: 5px;
    margin: 0px;
    

}*/
.imgbox{

   margin: 6px;
   border-radius: 2px;
   
   border: 1px solid #d8d8d8;
   -webkit-transition: border-color 1s linear; /* Saf3.2+, Chrome */
   -moz-transition: border-color 1s linear; /* FF3.7+ */
   -o-transition: border-color 1s linear; /* Opera 10.5 */
   transition: border-color 1s linear;

   padding: 5px;
   background-color: #ffffff;
   border-radius: 3px;

   -webkit-box-shadow: 0px 1px 1px 0px rgba(50, 50, 50, 0.12);
   -moz-box-shadow:    0px 1px 1px 0px rgba(50, 50, 50, 0.12);
   box-shadow:         0px 1px 1px 0px rgba(50, 50, 50, 0.12);
   
}
.imgbox:hover{
   border-color: #6ac261;
}
.imgnavbar{
   width: 100%;
   overflow: hidden;
   display: block;
   background-color: #ffffff;
}
.imgtitle{
padding-top: 3px;
}
</style>
  
<div class="row"> 
    <div class="col-md-12">
        <div class="panel" style="padding: 4px; margin: 6px;">
            
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" id="file_upload_button" data-target="#FileUploadModal">Upload files</button>
                    <!--<button type="button" class="btn btn-success btn-sm" onclick="getImages({$gallery_id})" >Refresh list</button>-->
                    <div style="float: right;"> 
                        
                       
                      
                       <button class="btn btn-sm btn-danger pull-right" onclick="manageSelectedItems(document.getElementById('action-select').value)">START</button>
                        <select id="action-select" class="form-control input-sm pull-right firefox-form-fix" style="margin-right: 5px; color: black; width: 135px;">
                            <option>Choose Action</option>
                            <option value="delete">Delete selected</option>
                            <option value="activate">Activate selected</option>
                            <option value="deactivate">Deactivate selected</option>
                            <option value="feature">Mark as featured</option>
                            <option value="unfeature">Unfeature</option>
                        </select>
                        
                        <div id="cat-box" style="float: right;">
                           <button class="btn btn-sm btn-success pull-right" onclick="manageSelectedItems('categorise')" style="margin-right: 5px;">Categorise</button>
                           <select id="categories" name="cat-select" class="form-control input-sm pull-right" style="margin-right: 5px; width: 135px;">

                           </select>

                           <button class="btn btn-sm btn-success pull-right" onclick="addCategory()" style="margin-right: 5px;">ADD</button>
                           <input type="text" id="cat-add" name="cat_name" class="form-control input-sm pull-right" placeholder="Add new category" style="width: 135px; margin-right: 5px;">
                        </div>
                        
                    </div>
                    
            
        </div>

         <div id="alert-box" style=" margin: 6px;"></div>           
        
         <div id="maso">

         </div>
        
    </div>      
</div> 

       
  
<!-- Modal -->
<div class="modal fade" id="FileUploadModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Upload images</h4>
      </div>
      <div class="modal-body">

         <form action="{$base}gallery/upload/" method="POST" enctype="multipart/form-data" id="upload" class="form-inline" role="form">

         <div class="form-group" style="width: 100%;">
            <input type="file" style="width: 85%;" id="file" name="file[]" class="form-control" required multiple>
            <input type="SUBMIT" id="submit" name="submit" class="btn btn-default pull-right" value="Upload">
         </div>

         </form>        
         <br>
         <div id="progress" style="display: none;" class="progress">
           <div id="pb" class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100">
             <span id="pt" class="sr-only"></span>
           </div>
         </div>

         <div id="uploads">

         </div>

      </div>

    </div>
  </div>
</div>  
         
<script type="text/javascript">  
function getCategories(){
   var listitems = $('#categories');
   listitems.empty();
  
   $.ajax({
      type : "POST",
      url : "{$base}gallery/getcats/",
      dataType : 'json',
      success: function(items){

         for(i = 0; i < items.length; i++){
            listitems.prepend('<option value='+items[i].cat_id+'>'+items[i].cat_name+'</option>');
         }

      }
   });
}
function addCategory(){
    var fields = $('#cat-add').serialize();
   
    $.ajax({
        type : "POST",
        url : "{$base}gallery/addcategory/",
        data : fields,
        dataType : 'json',
        success: function(){
           $('#cat-add').value = "";
          
           getCategories();
           
        }
    });
}
  
function getImages(){
 

   var listitems = $('#maso');
   listitems.empty();
   $.ajax({
      type : "POST",
      data: {
         gallery_id: 14,
      },
      url : '{$base}gallery/getimages/',
      dataType : 'json',
      success: function(items){
         
         // layout Masonry again after all images have loaded
         $('#alert-box').empty();
         if(items.status){
            
            $('#alert-box').html('<div class="alert alert-warning alert-sm" role="alert">'+items.status+'</div>');
            
         }
         
         for(i = 0; i < items.length; i++){
             var featured = "";
            if(items[i].featrue){
                var featured = '<span class="label label-info">Featured</span>'
            }
            
            listitems.prepend('<div class="masoitem"><div class="imgbox"><a class="fresco" data-fresco-group="example" href='+'{$base}'+items[i].img_path+'><img src='+'{$base}'+items[i].img_path+'></a><span class="label label-success">'+items[i].cat_name+'</span>&nbsp;<span class="label label-danger">'+items[i].activated+'</span>&nbsp;'+featured+'<div class="imgnavbar"><div class="imgtitle"><div class="input-group"><input name="img_title" id="img_input_'+items[i].img_id+'" class="form-control input-sm firefox-form-fix" onChange="updateImage('+items[i].img_id+');" value="'+items[i].img_title+'" type="text"><span class="input-group-addon input-sm"><span class="check-column"><input value="'+items[i].img_id+'" type="checkbox"></span></span></div></div></div></div><div class="clearfix"></div></div></div>');
         }
        
           
            var $container = $('#maso').masonry();
            // layout Masonry again after all images have loaded
            $container.masonry('destroy');
            $container.masonry();
            $container.imagesLoaded( function() {
              $container.masonry();
            });

      }
   });
}  
  
  
  
$(document).ready(function() {
   getImages();
   getCategories();
});   

function updateImage(id) {

    var fields = $('#img_input_'+id+'').serialize();

    $.ajax({
        type : "POST",
        url : "{$base}gallery/updateimage/"+id+"/",
        data : fields,
        dataType : 'json',
        success: function(data){
           $('#img_input_'+id+'').val(data.img_title);
        }
    });

}

function manageSelectedItems(method) {
   
   var column = $('.check-column :checkbox:checked');
   var category = $('#categories').val();
   var checked_items = {};
 
   column.each(function(index) {
      checked_items[index] = column[index].value;
   });
   
   $.ajax({
      type : "POST",
      url : '{$base}defq/'+method+'/tbl=gallery_images:tar=img_id:cat='+category+'/',
      data : checked_items,
      dataType : 'json',
      success: function(){
         getImages();
      }
   });

}


</script>  
   
<script type="text/javascript" src="{$jsbase}fileuploader.js"></script>
<script type="text/javascript">
document.getElementById('file_upload_button').addEventListener('click', function(e){
   
   //SET FUNCTIONAL ELEMENTS
   var form = document.getElementById('upload');
   var f = document.getElementById('file');
   var prog = document.getElementById('progress');
   var pb = document.getElementById('pb');
   var outarea = document.getElementById('uploads');
   
   //RESET EVRYTHING
   pb.style.width = "0%";
   prog.style.display = "none";
   outarea.innerHTML = "";
   form.reset();
   
   document.getElementById('file').addEventListener('change', function(e){
      //RESET EVRYTHING WHEN NEW FILES WERE CHOOSEN
      prog.style.display = "none";
      pb.style.width = "0%";
      outarea.innerHTML = "";
   });
 
   document.getElementById('submit').addEventListener('click', function(e){
      e.preventDefault();

         app.uploader({
             files: f,
             group_by: 14,
             folder: "gallery",
             progressArea: prog,
             progressBar: pb,
             out: outarea,
             processor: '{$base}gallery/upload/',

             finished: function(data){
                 getImages({$gallery_id});
                 if(data.succeded > 0){
                     outarea.innerHTML = '<div class="alert alert-success" role="alert">'+data.succeded+' Files were uploaded succesfully!<div>';
                     
                 }

                 if(data.failed !== ""){
                    
                    var i;
                    
                    for(i=0; i<data.failed.length; i++){
                        err_item = document.createElement('div');
                        err_item.innerHTML = '<div class="alert alert-danger" role="alert">'+data.failed[i].error_msg+' - '+data.failed[i].name+'</div>';
                        outarea.appendChild(err_item);
                    }
                    
                 }

                 form.reset();
                 
             },
             error: function(){
                console.log('Not working');
             }
             
         }); //APP OBJECT
     
   }); //SUBMIT
 
}); //IMG UP BUTTON
</script>
   
{/block}