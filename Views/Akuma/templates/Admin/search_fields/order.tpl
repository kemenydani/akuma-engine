<div class="input-group input-group-sm">
<span class="input-group-addon" id="label_{$name}"> <span class="glyphicon glyphicon-sort" aria-hidden="true"></span>&nbsp; {$details.label}</span>
<select value="{if $details.order_direction}{$details.order_direction}{/if}" name="search[order][{$name}]" aria-describedby="label_{$name}" class="form-control">
    <option value="">(nincs)</option>
    <option {if $details.order_direction == 'ASC'}selected="selected"{/if} value="ASC">Ascending</option>
    <option {if $details.order_direction == 'DESC'}selected="selected"{/if} value="DESC">Descending</option>
</select>
</div>