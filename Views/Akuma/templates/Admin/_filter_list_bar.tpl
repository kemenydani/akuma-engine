<div class="panel panel-default" style="">
    
        <form class="navbar-form form-group-sm" method="GET" action="{$base}{$controller}/admin/">
            
            {if ($search == true)}
              
                {foreach $fields as $name => $field}
                    {if ($field.operations.search == true)}
                        
                        {field dir='Admin/search_fields/' type=$field.type name=$name details=$field}
                    {/if}
                {/foreach}

            {/if}
            
            {if ($order == true)}
                
                    {foreach $fields as $name => $field}
                        {if ($field.order)}
                                {field dir='Admin/fields/' type="order" name=$name details=$field}
                        {/if}
                    {/foreach}

            {/if}
            
            <span class="pull-right ">
                
                <a href="{$base}{$method_url}">
                    <button type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-retweet" aria-hidden="true"></span></button>
                </a>
                <button type="submit" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                
            </span>
                    <div class="clearfix"></div>
        </form>
   
</div>