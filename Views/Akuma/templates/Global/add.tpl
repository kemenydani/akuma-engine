{extends file="Admin/full.tpl"}
{block name=content}

<div class="row"> 
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                {if (!$message)}
                <form class="form-horizontal" role="form" id="form_{$controller}" method="POST" action="{$base}{$controller}/{$form_action}/{$item[0]}/">
                    <div class="form group form-group-sm">
                        {foreach $fields as $field_name => $field_content}
                            {if ($field_content.visible)}
                                {if array_key_exists($field_name, $item)}
                                    {assign var=value value=$item[$field_name]}
                                {/if}
                                {field dir='Admin/field/' type=$field_content.type field_name=$field_name value=$value details=$field_content}
                            {/if}
                        {/foreach}

                    </div><!-- form-group -->
                    
                    <button type="submit" class="btn btn-default">Submit</button>
                    
                </form><!-- form -->
                {else}
                    <div class="alert alert-success" role="alert">{$message}<span class="pull-right"><a href="{$base}{$controller}/admin/">Vissza az admin menübe</a></span></div>
                {/if}
                    
            </div> <!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col-md-12 -->
</div> <!-- row -->

{include file='Admin/filewizard.tpl' output='news_image'}         
                                
{/block}