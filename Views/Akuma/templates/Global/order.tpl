<div class="panel panel-default">
    <div class="panel-body">
        <form class="form-inline" method="GET" action="{$base}news/admin/">
            {foreach $fields as $name => $field}
                {if ($field.order)}
                    <div class="form-group">
                    <label>{$name}:</label>
                    <select name="search[order][{$name}]" class="form-control">
                        <option></option>
                        <option value="ASC">Ascending</option>
                        <option value="DESC">Descending</option>
                    </select>
                    </div>
                {/if}
            {/foreach}
            <input type="submit" class="btn btn-default" value="Keresés">
        </form>
    </div>
</div>