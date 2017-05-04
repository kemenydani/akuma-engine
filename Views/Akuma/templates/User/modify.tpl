{extends file="Global/_full.tpl"}
{block name=content} 

        <div style="">
            <div class="widget">
                <div class="widget-outer">
                    <div class="widget-inner">
                    <div class="widget-header"><strong>profile of </strong> {$details.username}</div>
                        <div class="widget-body">

                            <div style="width: 100%; font-size: 13px;">
                                
                                <div style="width: 700px; float: left;">
                                    
                                <form method="POST" action="{$base}user/manage/{$user.user_id}/">

                                    <section class="form-heading">User informations:</section>
                                    
                                    <section class="form-field">
                                        <label class="form-field-label form-vertical">Username:</label>
                                        <input type="text" name="username" value="{$user.username}" placeholder="Username" class="form-field-input input-text">
                                    </section>
                                    
                                    <div class="form-group">
                                        <div class="form-half">
                                            <section class="form-field">
                                                <label class="form-field-label form-vertical">Email:</label>
                                                <input type="text" name="email" value="{$user.email}" placeholder="Email" class="form-field-input input-text">
                                            </section>
                                        </div>
                                        <div class="form-half">
                                            <section class="form-field">
                                                <label class="form-field-label form-vertical">show email on my profile:</label>
                                                <select name="showemail">
                                                    <option {if $user.showemail == 1}selected="selected"{/if}value="1">Show</option>
                                                    <option {if $user.showemail == 0}selected="selected"{/if}value="0" >Not show</option>
                                                </select>
                                            </section>
                                        </div>
                                    </div>
                                    
                                    <div class="clear"></div>
                                    <section class="form-heading">Profile settings:</section>  
                                    
                                    <div class="form-group">
                                        <div class="form-half">
                                            <section class="form-field">
                                                <label class="form-field-label form-vertical">Commenting on my profile page:</label>
                                                <select name="commenting">
                                                    <option {if $user.commenting == 1}selected="selected"{/if}value="1">Enabled</option>
                                                    <option {if $user.commenting == 0}selected="selected"{/if}value="0" >Disabled</option>
                                                </select>
                                            </section>
                                        </div>
                                        <div class="form-half">
                                            <section class="form-field">
                                                <label class="form-field-label form-vertical">Show my blogs on my profile:</label>
                                                <select name="showblogs">
                                                    <option {if $user.showblogs == 1}selected="selected"{/if}value="1">Show</option>
                                                    <option {if $user.showblogs == 0}selected="selected"{/if}value="0" >Not show</option>
                                                </select>
                                            </section>
                                        </div>

                                         <div class="form-half">
                                            <section class="form-field">
                                                <label class="form-field-label form-vertical">Show my latest comments on my profile:</label>
                                                <select name="showcomments">
                                                    <option {if $user.showcomments == 1}selected="selected"{/if}value="1">Show</option>
                                                    <option {if $user.showcomments == 0}selected="selected"{/if}value="0" >Not show</option>
                                                </select>
                                            </section>
                                        </div>
                                                
                                    </div>
                                           
                                    
           
                                                
                                    <div class="clear"></div>
                                    <section class="form-heading">Personal:</section>
                                    
                                    <div class="form-group">
                                        <div class="form-half">
                                            <section class="form-field">
                                                <label class="form-field-label form-vertical">Firstname:</label>
                                                <input type="text" name="firstname" value="{$user.firstname}" placeholder="Firstname" class="form-field-input input-text">
                                            </section>
                                        </div>

                                        <div class="form-half">
                                            <section class="form-field">
                                                <label class="form-field-label form-vertical">Lastname:</label>
                                                <input type="text" name="lastname" value="{$user.lastname}" placeholder="Lastname" class="form-field-input input-text">
                                            </section>
                                        </div>
                                    </div>
                                            
                                    <div class="form-group">
                                        <div class="form-half">
                                            <section class="form-field">
                                                <label class="form-field-label form-vertical">Country:</label>
                                                <select name="country_short">
                                                    {if $user.country_short}<option selected="selected" value="{$user.country_short}">{country country_id=$user.country_short}</option>{/if}
                                                    {foreach $countries as $short => $name}
                                                        <option value="{$short}">{$name}</option>
                                                    {/foreach}
                                                </select>
                                            </section>
                                        </div>

                                        <div class="form-half">
                                            <section class="form-field">
                                                <label class="form-field-label form-vertical">City:</label>
                                                <input type="text" name="city" value="{$user.city}" placeholder="City" class="form-field-input input-text">
                                            </section>
                                        </div>
                                    </div>
                                    
                                    <div class="clear"></div>
                                    <section class="form-heading">About me:</section>            
                                    <div class="form-field">
                                        <textarea name="bio">{$user.bio}</textarea>
                                    </div>        
                                            
                                    <div class="clear"></div>
                                    <section class="form-heading">Preferences:</section>        
                                    {assign var="info" value=json_decode($user.user_info, true)}
                                    <div class="form-group">
                                        <div class="form-half">
                                            <section class="form-field">
                                                <label class="form-field-label form-vertical">CPU:</label>
                                                <input type="text" name="user_info[cpu]" value="{$info.cpu}" placeholder="CPU" class="form-field-input input-text">
                                            </section>
                                        </div>

                                        <div class="form-half">
                                            <section class="form-field">
                                                <label class="form-field-label form-vertical">GPU:</label>
                                                <input type="text" name="user_info[gpu]" value="{$info.gpu}" placeholder="GPU" class="form-field-input input-text">
                                            </section>
                                        </div>
                                        {*
                                        <div class="form-half">
                                            <section class="form-field">
                                                <label class="form-field-label form-vertical">Monitor:</label>
                                                <input type="text" name="user_info[monitor]" value="{$info.monitor}" placeholder="Monitor" class="form-field-input input-text">
                                            </section>
                                        </div>
                                        *}
                                        <div class="form-half">
                                            <section class="form-field">
                                                <label class="form-field-label form-vertical">Mouse:</label>
                                                <input type="text" name="user_info[mouse]" value="{$info.mouse}" placeholder="Mouse" class="form-field-input input-text">
                                            </section>
                                        </div>
                                            
                                        <div class="form-half">
                                            <section class="form-field">
                                                <label class="form-field-label form-vertical">Mousepad:</label>
                                                <input type="text" name="user_info[mousepad]" value="{$info.mousepad}" placeholder="Mousepad" class="form-field-input input-text">
                                            </section>
                                        </div>

                                        <div class="form-half">
                                            <section class="form-field">
                                                <label class="form-field-label form-vertical">Keyboard:</label>
                                                <input type="text" name="user_info[keyboard]" value="{$info.keyboard}" placeholder="Keyboard" class="form-field-input input-text">
                                            </section>
                                        </div>
                                            
                                        <div class="form-half">
                                            <section class="form-field">
                                                <label class="form-field-label form-vertical">Headset:</label>
                                                <input type="text" name="user_info[headset]" value="{$info.headset}" placeholder="Headset" class="form-field-input input-text">
                                            </section>
                                        </div>
                                        {*
                                        <div class="form-half">
                                            <section class="form-field">
                                                <label class="form-field-label form-vertical">Memory:</label>
                                                <input type="text" name="user_info[memory]" value="{$info.memory}" placeholder="Memory size/type" class="form-field-input input-text">
                                            </section>
                                        </div>
                                        *}
                                    </div>
                                    
                                    <div class="clear"></div>
                                    <section class="form-heading">Social (links):</section>  
                                    
                                    <div class="form-group">
                                        <div class="form-half">
                                            <section class="form-field">
                                                <label class="form-field-label form-vertical">Facebook:</label>
                                                <input type="text" name="user_info[facebook]" value="{$info.facebook}" placeholder="Facebook" class="form-field-input input-text">
                                            </section>
                                        </div>
                                            
                                        <div class="form-half">
                                            <section class="form-field">
                                                <label class="form-field-label form-vertical">Twitter:</label>
                                                <input type="text" name="user_info[twitter]" value="{$info.twitter}" placeholder="Twitter" class="form-field-input input-text">
                                            </section>
                                        </div>
                                            
                                        <div class="form-half">
                                            <section class="form-field">
                                                <label class="form-field-label form-vertical">Steam:</label>
                                                <input type="text" name="user_info[steam]" value="{$info.steam}" placeholder="Steam" class="form-field-input input-text">
                                            </section>
                                        </div>

                                        <div class="form-half">
                                            <section class="form-field">
                                                <label class="form-field-label form-vertical">Youtube:</label>
                                                <input type="text" name="user_info[youtube]" value="{$info.youtube}" placeholder="Youtube" class="form-field-input input-text">
                                            </section>
                                        </div>
                                            
                                        <div class="form-half">
                                            <section class="form-field">
                                                <label class="form-field-label form-vertical">Twitch.tv:</label>
                                                <input type="text" name="user_info[twitch]" value="{$info.twitch}" placeholder="Twitch tv" class="form-field-input input-text">
                                            </section>
                                        </div>

                                        <div class="form-half">
                                            <section class="form-field">
                                                <label class="form-field-label form-vertical">Hitbox.tv:</label>
                                                <input type="text" name="user_info[hitbox]" value="{$info.hitbox}" placeholder="Hitbox tv " class="form-field-input input-text">
                                            </section>
                                        </div>   
                                    </div>
                                            
                                    
                                    
                                    <div class="clear"></div>
                                    <br>
                                    <center><input type="submit" value="Save changes" class="button button-big rounded-4-times"></center>
                                    
                                </form>
                                    
                                </div>

                            <div style="float: right; width: 400px; height: 500px;">
                                <div id="profile_pic_area" style="height: 200px; overflow: hidden; width: 200px; margin-left: 85px; position: relative; margin-bottom: 20px; border: 1px solid #666">
                                    <img style="width: 100%;" src="{if !$user.avatar}{$base}uploads/nopic.png{else}{$base}{$user.avatar}{/if}">
                                </div>
                                
                                
                                <div style="height: 35px; width: 100%; border: 1px solid #444; margin-bottom: 20px; text-align: center; line-height: 35px;">
                                    The optimal image size is 200x200 (jpg/png) or bigger.
                                </div>
                                
                                <div id="fileUploaderForm">
                                    <div class="form-group" style="width: 100%;">
                                        <input type="file" id="fileUploaderInput" style="width: 80%;" name="file[]" class="form-control pull-left">
                                        <button type="button" id="fileUploaderUpload" onclick="fu.uploadFiles()" class="button button-default">Upload</button>
                                        <button id="saveChanges" class="button button-default float-right" style="margin-top: 15px;" type="button">Save changes</button>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div id="fileUploaderProgress" class="progress">
                                    <div id="fileUploaderProgressBar" class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div> 
                                </div>
                                <div id="notes"></div>
                            </div>  

                                <div class="clear"></div>
                            </div>
            
                                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
<template id="fileUploaderErrorTemplate" type="template">    
       <div class="alert alert-danger" id="fileBrowserError" role="alert">%%name%% - %%message%%</div>
</template>
                                            
<script>
    
var fileUploaderOptions = {
    'url' : '{$base}iterator/handleRequest',
    'targets' : {
        'forum' : document.getElementById('fileUploaderForm'), 
        'input' : document.getElementById('fileUploaderInput'), 
        'progressbar' : document.getElementById('fileUploaderProgressBar'), 
        'notes' : document.getElementById('fileUploaderNotes'),
        'picture_area' : document.getElementById('profile_pic_area')
    },
    'templates' : {
        'error' : document.getElementById('fileUploaderErrorTemplate')
    },
    'buttons' : {
        'upload' : document.getElementById('fileUploaderUpload'),
        'save_changes' : document.getElementById('saveChanges')
    }
};  

function fileUploader(options){
    
    var self = this;
    this.o = options;

    this.showProfilePicture = function(){
        self.AjaxPost().done(function(result){
            console.log(result);  
        });
    },

    this.AjaxPost = function(){
        return $.ajax({
            type: "POST",
            url: '{$base}user/getuserpicture/',
            data: {
                user_id : '{$user.user_id}'
            },
            dataType: 'json'
        }).promise();
    },


    this.AjaxCall = function(data){
        return $.ajax({
            url: self.o.url,
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            beforeSend: function(){
                self.resetProgressBar();
            },
            xhr: function() {
                var myXhr = $.ajaxSettings.xhr();
                if(myXhr.upload){
                    myXhr.upload.addEventListener('progress',self.showProgress, false);
                } 
                return myXhr;
            }
        }).promise();
    },            
                
    this.resetProgressBar = function(){
        $(self.o.targets.progressbar).css('width', 0+'%');
    },
    
    this.showProgress = function(event){
        
        var percent = ((event.loaded / event.total)*100 + '%');
        
        if (event.lengthComputable) {
            $(self.o.targets.progressbar).css('width', percent);
        }
    },
    
    this.AjaxChange = function(path){
        return $.ajax({
            type: "POST",
            url: '{$base}user/savepicturechange/',
            data: {
                path : path,
                user_id : '{$user.user_id}'
            },
            dataType: 'json'
        }).promise();
    },

    this.o.buttons.save_changes.addEventListener('click', function(){
        if(self.new_image_path){
            self.saveChanges(self.new_image_path);
        }
    }),
    
    this.saveChanges = function(path){
        self.AjaxChange(path).done(function(result){
            console.log(result); 
            alert('The profile picture has been succesfully changed!');
        });
    },
    
    this.updateImage = function(path){
        $(self.o.targets.picture_area).html('');
        $(self.o.targets.picture_area).append('<img style="width: 100%;" src="{$base}'+path+'">');
        self.new_image_path = path;
    },
    
    this.uploadFiles = function(){
        this.resetProgressBar();
        $(this.o.targets.notes).empty();
        this.AjaxCall(this.prepareData(this.o.targets.input, 'uploads/')).done(function(response){
            var response = JSON.parse(response);
            self.updateImage(response.upload_path);
            self.handleResponse(response);
            $(self.o.targets.input).val('');
            
        }); 
        
    },
            
    this.handleResponse = function(response){
        
        if(response.succeded > 0){ //number
           
            //$(this.o.targets.notes).html(response.succeded);
        }

        if(response.failed !== null){ //array of errors
           for(var i = 0; i < response.failed.length; i++){
               self.templateHandler(response.failed[i], self.o.templates.error);
           }
        }
    },
    
    this.prepareData = function(input, upload_dir){
        
        var data = new FormData();
        data.append('upload_dir', upload_dir);
        
        for(var i = 0; i < input.files.length; ++i){
            //console.log(this.o.targets.upload_input.files[i]);
            data.append('file[]', input.files[i]);
        }
        
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

        $(this.o.targets.notes).css('display','none').append(item).fadeIn(200);
       
    }

}     


var fu = new fileUploader(fileUploaderOptions);

</script>                                           
{/block}