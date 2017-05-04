{extends file="Admin/full.tpl"}
{block name=content}
<template id="successTemplate" type="template">    
    <div class="alert alert-success" id="msgError" role="alert">%%message%%<span class="pull-right"><a href=''>Create an another news post</a></span></div>
</template>
<script type="text/javascript" src="{$etcDir}tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "#news_long",
        setup: function (editor) {
            editor.on('change', function () {
                editor.save();
            });
        }
    });
</script>
<!--action="{$base}news/edit/39/"-->
<div class="row" style=""> 
    <div class="col-md-12">
       <div class="panel panel-default">
            <div class="panel-body">
                {if empty($success)}
                <form class="form-vertical" method="POST" action="{$base}news/edit/{$item.news_id}/" role="form" id="contentForm">
                    
                    <div class="form-group">
                        <label for="news_title" class="col-sm-2 control-label">Cím</label>
                        <div class="col-sm-12">
                            <input value="{$item.news_title}" type="text" class="form-control" name="news_title" id="news_title" placeholder="Írja be a hír címét">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                        
                    <hr>
                    
                    <div class="form-group">
                        <label for="news_quote" class="col-sm-2 control-label">Bevezető</label>
                        <div class="col-sm-12">
                            <textarea rows="4" style="resize: vertical;" class="form-control" name="news_quote" id="news_quote" placeholder="Rövid bevezető szöveg">{$item.news_quote}</textarea>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <hr>
                        
                    <div class="form-group">
                        <label for="news_long" class="col-sm-2 control-label">Tartalom</label>
                        <div class="col-sm-12">
                            <textarea rows="6" class="form-control" name="news_long" id="news_long" placeholder="">{$item.news_long}</textarea>
                        </div>
                        <div class="clearfix"></div>
                    </div>
   
                    <hr>
                    
                    <div class="form-group">
                        <label for="news_image" class="col-sm-2 control-label">Kép</label>
                        <div class="col-sm-12">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#fileBrowserModal">Kép keresése</button>
                                </span>
                                <input value="{$item.news_image}" type="text" class="form-control" name="news_image" id="news_image" placeholder="Browse image">
                            </div>
                        </div>
                        <div class="clearfix"></div>  
                     </div>
                                
                    <br>
                    <hr>
                    
                    <div class="col-sm-12">
                         <button type="submit" class="btn btn-success">
                             <span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span>&nbsp;
                             Változtatások mentése
                         </button>
                         <button type="button" id="submitForm" style="display: none;" class="btn btn-success">
                             <span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span>&nbsp;
                             Változtatások mentése
                         </button>
                    </div>
                    <div class="clearfix"></div> 
                    <hr>
                        
                    </div>

                </form>
                {else}           
                    <div class="alert alert-success" role="alert">{$success.message}<span class="pull-right"><a href="{$base}news/admin/">Vissza az admin menübe</a></span></div>         
                {/if}
                
            </div>
        </div>
    </div>
</div>

{include file='Admin/filewizard.tpl' output='news_image'}         
                                
<script type="text/javascript">

function formControl(options){

    var self = this;
    this.o = options;

    this.o.targets.submit.addEventListener('click', function(){

        self.ajaxExecute(self.prepareData(self.o.targets.form)).done(function(response){
            
            if(response.errors === true){
                
            }
            console.log(response);
            if(response.success.message){
               $(self.o.targets.form).empty();
               self.templateHandler(response.success, self.o.templates.success);
            }
            
        });
    }),

    this.ajaxExecute = function(data){
        return $.ajax({
            url: self.o.url,
            data: data,
            type: 'POST',
            dataType: 'json',
            beforeSend: function(){
               
            }
        }).promise();
    },
    
    this.prepareData = function(form){

        var data = $(form).serializeArray();
        return data;
        
    },
    
    this.templateHandler = function(content, template){
        
        var matches = [];
        var modified = $.trim(template.innerHTML);
        
        for(var key in content) { 
            var keyreg = new RegExp(key,"g");
            matches[key] = modified.match(keyreg);
            if(matches[key]){
                for(i = 0; i < matches[key].length; i++){
                    var modified = modified.replace( '%%'+matches[key][i]+'%%', content[key]); 
                }
            }  
        }
        
        this.releaseContent(modified);
        
    },
            
    this.releaseContent = function(item){
        $(this.o.targets.form).css('display','none').append(item).fadeIn(300);
    }

}

var options = {
    'url' : '{$base}news/edit/39/',
    'mode' : 'add',
    'templates' : {
        'success' : document.getElementById('successTemplate'),
    },
    'targets' : {
        'form' : document.getElementById('contentForm'),
        'submit' : document.getElementById('submitForm')
    }
};

var fc = new formControl(options);

</script>

{/block}