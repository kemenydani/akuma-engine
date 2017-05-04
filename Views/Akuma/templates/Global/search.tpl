<div class="panel panel-default">
    <div class="panel-body">
        <form class="form-inline form-group-sm" method="GET" action="{$base}news/admin/">
            
            {foreach $fields as $name => $field}
                {if ($field.search)}
                    {field dir='Admin/fields/' type=$field.type name="search[$name]" details=$field}
                {/if}
            {/foreach}

            <input type="submit" class="btn btn-default" value="Keresés">
            <a href="{$base}{$method_url}"><button type="button" class="btn btn-default">Keresés törlése</button></a>
        </form>
    </div>
</div>