{extends file="Admin/full.tpl"}
{block name=content}
<style type="text/css">

</style>

<div class="panel panel-default">
   <div class="panel-body">
         <div class="row"> 
             <div class="col-md-12">
                 <div class="col-md-7">
                     <form action="{$base}gallery/add/" method="POST" id="gallery_add" class="form-horizontal" role="form">
                        <div class="form-group form-group-sm">
                             <input type="submit" id="submit" name="submit" class="btn btn-sm btn-success" value="Add new gallery">
                             <div class="col-sm-8">
                                 <input class="form-control" type="text" name="gallery_name" id="gallery_name" placeholder="Title of the new gallery">
                             </div>
                         </div>
                     </form>  
                 </div> 
                 <div class="col-md-5"> 
                        <button class="btn btn-sm btn-danger pull-right"  onclick="manageSelectedItems('delete')">Delete selected</button>
                        <button class="btn btn-sm btn-success pull-right" style="margin-right: 15px;" onclick="manageSelectedItems('deactivate')">Deactivate selected</button>
                        <button class="btn btn-sm btn-success pull-right" style="margin-right: 15px;" onclick="manageSelectedItems('activate')">Activate selected</button>
                 </div>

                 <div class="clearfix"></div>
                 <hr> 
                 <table class="table table-condensed">
                    <thead>
                      
                          <th style="width: 88%">Name</th>
                          <th style="width: 2%;"></th>
                          <th style="width: 10%;"></th>
                       
                    </thead>
                        
                    <tbody id="listitems">
                       
                    </tbody>
                    
                 </table>
             </div>      
         </div> 
   </div>  
</div> 
                       
<script type="text/javascript">

function getTableContents(){
   
   var listitems = $('#listitems');
   listitems.empty();
   $.ajax({
      type : "POST",
      url : "{$base}gallery/get/",
      dataType : 'json',
      success: function(items){
         
         for(i = 0; i < items.length; i++){
            listitems.prepend('<tr><td>'+'('+items[i].act+') '+items[i].gallery_name+'</td><td style="text-align: right" class="check-column"><input value="'+items[i].gallery_id+'" type="checkbox"></td><td> <a href="'+items[i].url+'" class="btn btn-xs btn-info pull-right">Modify</a></td></tr>');
         }
  
      }
   });
}

$(document).ready(function() {
   getTableContents();
});


//ADD
document.getElementById('submit').addEventListener('click', function(e){
    e.preventDefault();
    
    var fields = $('#gallery_add').serializeArray();
    
    
    $.ajax({
        type : "POST",
        url : "{$base}gallery/add/",
        data : fields,
        dataType : 'json',
        success: function(data){
           getTableContents();
        }
    });

});   

function manageSelectedItems(method) {
   
   var checked_items = {};

   column.each(function(index) {
      checked_items[index] = column[index].value;
   });

   $.ajax({
      type : "POST",
      url : '{$base}defq/'+method+'/tbl=gallery:tar=gallery_id',
      data : checked_items,
      dataType : 'json',
      success: function(){
         getTableContents();
      }
   });

}

</script>
       
         
         
{/block}