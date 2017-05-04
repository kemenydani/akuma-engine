{extends file="Admin/_full.tpl"}
{block name=content}

    {include fields=$fields search=true order=true file="Admin/_filter_list_bar.tpl"}

    <div class="panel panel-default">
        <div class="panel-body">
            
            <form method="POST" action="{$base}{$controller}/manage/" class="form-inline form-group-sm">
                <div class="">
                    
                    {if $items}
                    <span class="pull-right">
                        <div class="form-group">
                            <select name="method" class="form-control">
                                <option value="delete">Delete</option>
                                {if isset($items[0].active)}
                                {/if}
                            </select>
                        </div>
                        <input type="submit" value="Go" class="btn btn-default btn-sm">
                    </span>
                    {/if}
                    <div class="clearfix"></div>
                </div>
                <hr>
                
            {if $items}
            <table class="table table-responsive table-condensed">
                <thead>
                  <tr>
                    <th width="2%">#</th>
                    {if $table}
                        {for $i = 0; $i < count($table); $i++}
                            {if $table[$i]}<th width="">{if $table[$i].title}{$table[$i].title}{/if}</th>{/if}
                        {/for}
                    {/if}
                    <th width="" style="text-align: right">
                        
                        <div class="checkbox">
                            <label>
                                 <input class="pull-right" id="select_all" type="checkbox"> 
                            </label>
                        </div>
                        
                    </th>
                    <th width="10%"></th>
                  </tr>
                </thead>

                <tbody>
                  {foreach $items as $item} 
                  <tr class="{if isset($item.active) && $item.active == 0}active{/if}">
                    <td>{$item@index+1}</td>
 
                    {if $table}
                        {for $i = 0; $i < count($table); $i++}
                            {if $table[$i]}<td width="">{if $item[$table[$i].key]}{$item[$table[$i].key]|truncate:60}{else}n/a{/if}</td>{/if}
                        {/for}
                    {/if}

                    
                    <td style="text-align: right;"><input value="{$item[0]}" name="choosen[{$item[0]}]" type="checkbox"></td>
                    <td>
                        <span class="pull-right">

      
                            <!-- delete button modal dialog -->
                            <a data-toggle="modal" 
                               data-header="Delete this item?" title="Add this item"
                               data-message="{$item[1]}" 
                               data-href="{$base}{$controller}/delete/{$item[0]}/" 
                               class="toogleAlertDialog" 
                               href="#AlertDialog"
                               style="text-decoration: none;"
                            >
                                
                                <button type="button" class="btn btn-default btn-xs">
                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                </button>
                                
                            </a>
                            <!-- END delete button modal dialog -->
                            
                        </span>
                    </td>
                   
                  </tr>
                  {foreachelse}
                          {$error = "There are no services"}
                  {/foreach}
                </tbody>
            </table>
            {else}
                <div class="alert alert-info" role="alert"><b>Empty:</b> This module is empty, or your search returned without any results.</div>
            {/if}
            </form>
                

                
        </div>
    </div>
    
    <!-- extension for alert messages -->           
    {include file="Admin/_alert_dialog.tpl"}
    
    <!-- toogle all checkboxes on page -->  
    <script language="JavaScript">
    $('#select_all').click(function(event) {
        if(this.checked) {
            // Iterate each checkbox
            $(':checkbox').each(function() {
                this.checked = true;
            });
        }
        else {
          $(':checkbox').each(function() {
                this.checked = false;
            });
        }
    });
    </script>
    
{/block}

{block name=pagination}
    
    {if $pagination}
        {include file="Global/pagination.tpl" url=$method_url searchurl = $searchurl details=$pagination}
    {/if}
    
{/block}