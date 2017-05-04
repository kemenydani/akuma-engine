{extends file="Admin/_full.tpl"}
{block name=content}

<div class="row"> 
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                {if (!$message)}
                <form class="form-horizontal" role="form" id="form_{$controller}" method="POST" action="{$base}{$controller}/{if $item}edit/{$item[0]}/{else}add/{/if}">
                    <div class="form group form-group-sm">
                        {foreach $fields as $key => $field}
                            {if (!isset($field.display.hidden))}
                                {if array_key_exists($key, $item)}
                                    {assign var=value value=$item[$key]}
                                {/if}
                                {field dir='Admin/input_fields/' type=$field.type name=$key details=$field value=$value}
                                <hr>
                            {/if}
                        {/foreach}

                    </div><!-- form-group -->
                    
                    <button type="submit" class="btn btn-default">Submit</button>
                    
                </form><!-- form -->
                {else}
                    <div class="alert alert-success" role="alert">{$message}</div>
                    <span class="pull-right">
                        <a href="{$base}{$controller}/admin/"><button class="btn btn-info">Back to the admin menu</button></a>
                        <a style="display: none;" href="{$base}{$controller}/{if $item}edit/{$item[0]}{/if}"><button class="btn btn-info">Back to the edit form</button></a>
                    </span>
                {/if}
                    
            </div> <!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col-md-12 -->
</div> <!-- row -->
                        
{/block}