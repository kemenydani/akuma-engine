{extends file="Admin/full.tpl"}
{block name=content}
<style>

.previmg {
   
    width: 217px;
    max-width: 217px;
    min-width: 217px;
    margin-right: 15px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    position: relative;
    
    -webkit-order: 0;
    -ms-flex-order: 0;
    order: 0;
    -webkit-flex: 0 1 auto;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    -webkit-align-self: auto;
    -ms-flex-item-align: auto;
    align-self: auto;
    
}


.previmg .controls {
    width: 100%;
    height: 60px;
}
  

.gallimg {
    width: 100%; 
    height: 200px;
    position: relative;
    overflow: hidden;
}
.img_setting {
    height: 30px;
    width: 100%;
    line-height: 30px;
    padding-left: 10px;
    padding-right: 10px;
    background-color: #f1f1f1;
    border-top: 1px solid #ccc;
}
.flexy {
 display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-align-content: flex-start;
    -ms-flex-line-pack: start;
    align-content: flex-start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
}
</style>
<div class="row"> 
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body" style="">
                    {if !$message}
                        {if $item}
                            
                            {if $item.images}
                                {assign var=settings value=json_decode($item.img_settings, true)}
                                
                                <form action="{$base}gallery/manage/{$item.gallery_id}" method="post">
                                    <div class="flexy" style="margin-right: -15px;">
                                        {foreach $item.images as $img}
                                           

                                            <div class="previmg">

                                                <div class="gallimg">
                                                    <img style="width: 100%" src="{$base}{$img['thumb']}">
                                                </div>

                                                <div class="controls">
                                                    <div class="img_setting"><input style=""  {if in_array($img['name'], $settings.highlighted)} checked="checked"{/if} value="{$img['name']}" name="img_settings[highlighted][]" type="checkbox"> Highlighted</div>
                                                    <div class="img_setting"><input style=""  {if $settings.cover_img == $img['name']} checked="checked"{/if} value="{$img['name']}" name="img_settings[cover_img]" type="radio"> Cover image</div>
                                                </div>

                                            </div>


                                        {/foreach}
                                    </div>
                                    <hr>
                                    <input type="submit" class="btn btn-success">
                                </form>
                                
                                
                            {else}
                                <div class="alert alert-info">  
                                    There are no images inside the gallery folder: ({$item.folder}). Use the filemanage to uplad images in this folder. 
                                </div>  
                                <div class="clearfix"></div>
                            {/if}
                    
                        {else}
                            <div class="alert alert-info">  
                                This gallery does not exists.
                            </div>   
                            <div class="clearfix"></div>
                        {/if}
                        <div class="clearfix"></div>
            {else}
            <div class="alert alert-success" role="alert">Succesfully changed!<span class="pull-right"><a href="{$base}{$controller}/admin/">Back to the admin menu</a></span></div>
             {/if}
                
            </div> <!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col-md-12 -->
</div> <!-- row -->


{/block}