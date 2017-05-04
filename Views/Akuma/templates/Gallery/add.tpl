{extends file="Admin/full.tpl"}
{block name=content}
<template id="successTemplate" type="template">    
    <div class="alert alert-success" id="msgError" role="alert">%%message%%<span class="pull-right"><a href=''>Create an another news post</a></span></div>
</template>
<script type="text/javascript" src="{$etcDir}tinymce/tinymce.min.js"></script>

<div class="row"> 
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                
                <form class="form-horizontal" method="POST" action="{$base}news/add/" role="form" id="contentForm">
                    <div class="form group form-group-sm">

                        {foreach $fields as $field_name => $field_content}
                            
                            {if ($field_content.visible)}
                                {$field_name}
                                {field dir='Admin/field/' type=$field_content.type field_name=$field_name details=$field_content}
                            {/if}
                        {/foreach}

                    </div><!-- form-group -->
                    <button type="submit" class="btn btn-default">Submit</button>
                </form><!-- form -->
                
            </div> <!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col-md-12 -->
</div> <!-- row -->

{include file='Admin/filewizard.tpl' output='news_image'}         
                                

{/block}