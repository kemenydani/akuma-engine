{extends file="Admin/full.tpl"}
{block name=content}
<template id="successTemplate" type="template">    
    <div class="alert alert-success" id="msgError" role="alert">%%message%%<span class="pull-right"><a href=''>Create an another news post</a></span></div>
</template>
<div class="row" style=""> 
    <div class="col-md-12">
       <div class="panel panel-default">
            <div class="panel-body">
            
                <form class="form-vertical" method="POST" role="form" id="contentForm">
                    
                    <div class="form-group">
                        <label for="partner_name" class="col-sm-2 control-label">Név</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="partner_name" id="news_title" placeholder="Írja be a partner nevét">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="desc" class="col-sm-2 control-label">Bevezető</label>
                        <div class="col-sm-12">
                            <textarea rows="6" class="form-control" name="desc" id="news_quote" placeholder="Rövid ismertető"></textarea>
                        </div>
                    </div>
   <div class="form-group">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#fileBrowserModal">Browse image</button>
                            </span>
                            <input type="text" class="form-control" name="partner_img" id="news_image" placeholder="Browse image">
                        </div>
                        <div class="clearfix"></div>
                    </div>
              </div>
                    
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="button" id="submitForm" class="btn btn-default">Add</button>
                        </div>
                    </div>

                </form>
            
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
            
            if(response.error === true){
                
            }
            
            if(response.error === false){
               $(self.o.targets.form).empty();
               self.templateHandler(response, self.o.templates.success);
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
    'url' : '{$base}partners/add/',
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