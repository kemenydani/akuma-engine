{extends file="Global/_full.tpl"}
{block name=content} 

<style type="text/css">
#lisitems { /* Masonry container */
    -moz-column-count: 2;
    -webkit-column-count: 2;
    column-count: 2;
    -moz-column-gap: 1em;
    -webkit-column-gap: 1em;
    column-gap: 1em;
}

.item { /* Masonry bricks or child elements */
   display: inline-block;
   margin: 0 0 1em;
   width: 100%;
   padding: 5px;
   background-color: #ffffff;
   border-radius: 3px;

   -webkit-box-shadow: 0px 1px 1px 0px rgba(50, 50, 50, 0.12);
   -moz-box-shadow:    0px 1px 1px 0px rgba(50, 50, 50, 0.12);
   box-shadow:         0px 1px 1px 0px rgba(50, 50, 50, 0.12);
  
} 
.item img { width: 100%; }
.item p { text-align: justify; font-size: 90%; color: #505050;  }
.item .img-box { width: 100%; height: 150px; overflow: hidden; position: relative; }
.item .category {
   background-color: #00a8ff;
   color: white;
   padding-top: 3px;
   padding-bottom: 3px;
   padding-left: 5px;
   padding-right: 5px;
   position: absolute;
   right: 0px;
   bottom: 0px;
}

.item .read-more {
   background-color: #f4f4f4;
   color: #252525;
   font-weight: bold;
   line-height: 24px;
   padding-left: 10px;
   padding-right: 10px;
   border-bottom-right-radius: 3px;
   font-size: 12px;
   margin-right: -5px;
   margin-bottom: -5px;
   float: right;
   right: 0px;
   bottom: 0px;
}
.item .read-more:hover {
   text-decoration: none;
}
@media only screen and (min-width: 0px) and (max-width: 770px){
    #lisitems {
        -moz-column-count: 1;
        -webkit-column-count: 1;
        column-count: 1;
    }
}
</style>
<template id="galleryTemplate" type="gallery/template">   
    
        <div class='item'>
           <div class="img-box">
               <span class="category">%%cat_name%%</span>
               <a class="fresco" data-fresco-group="example" href="{$base}%%img_path%%">
                  <img src="{$base}%%img_path%%">
               </a>
           </div>
           <h4>%%img_title%%</h4>
           <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system</p>
           <a class="read-more" href="">Elolvasom</a>
        </div>
    
</template>


<script type="text/javascript">

function managerObj(){
 
    this.ajaxPost = function(){
        return $.ajax({
            type: "POST",
            url: '{$base}gallery/ajaxadd/',
            dataType: 'json'
        }).promise();
    };

}

function templateObj(template, animation){
    
    this.template = template;
    this.animation = animation;
    this.Input;
    this.Items;
    
    var self = this; //new var for object 
    
   this.displayResults = function(results){
       
      this.Input = results;
      this.Items = this.Input.items; 

      $.each( this.Items, function(index, obj){ //for each sql row
         //we use self for representing the main Object .this inside the each
         var matches = [];
         var modified = self.template;
           
         for(var key in obj) { //for each key
            var keyreg = new RegExp(key,"g");
            matches[key] = self.template.match(keyreg);
            if(matches[key]){
               for(i = 0; i < matches[key].length; i++){
                  modified = modified.replace( '%%'+matches[key][i]+'%%', obj[key]); 
               }
            }  
         }
          
         self.releaseItem(modified);

      });
        
   },
            
    this.addAnimation = function(item){
         //console.log(this.animation);
         //console.log(item);
         $("#lisitems").css('display','none').append(item).fadeIn(this.animation.speed);
        
    },
          
    this.releaseItem = function(item){
         this.addAnimation(item);
    }
    
}
</script>

<script type="text/javascript"> 

$(document).ready(function() { 
    
    var temp = $.trim( $('#galleryTemplate').html() );
    var animation = {
        type: 'fadein',
        speed: 500
    };
    
    var to = new templateObj(temp, animation);
    var mo = new managerObj();

    mo.ajaxPost().done(function(results){
       to.displayResults(results);
    });
    
});  
</script>

<div class="row"> 
    <div class="col-md-12">
       <div id="lisitems">


       </div>
    </div>      
</div> 
{/block} 