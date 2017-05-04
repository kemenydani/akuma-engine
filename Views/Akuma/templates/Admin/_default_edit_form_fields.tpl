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
                            {assign var=value value=""}
                            {if array_key_exists($key, $item)}
                                {$value = $item[$key]}
                            {/if}
                            {if $data}
                                {$value = $data[$key]}
                            {/if}
                            {field dir='Admin/input_fields/' error=$errors[$key] type=$field.type name=$key details=$field value=$value}
                            <hr>
                        {/if}
                    {/foreach}
                    </div><!-- form-group -->
                    <div>
                        <center>
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{$base}{$controller}/{if $item}edit/{$item[0]}/{else}add/{/if}">
                            <button type="button" class="btn btn-default">Reset</button>
                            </a>
                        </center>
                        <div class="clearfix"></div>
                        <br>
                    </div>
                </form><!-- form -->
                {else}
                    <div class="alert alert-success" role="alert">{$message}</div>
                    <span class="pull-right">
                        <a href="{$base}{$controller}/admin/"><button class="btn btn-info">Back to the admin menu</button></a>
                    </span>
                {/if}
                    
            </div> <!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col-md-12 -->
</div> <!-- row -->
                        
{/block}