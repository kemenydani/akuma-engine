<div class="input-group input-group-sm">
<span class="input-group-addon" id="label_{$name}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;{$details.display.label}</span>
<input type="text" 
       name="search[where][{$name}][param]" 
       value="{if $details.value}{$details.value}{/if}"
       placeholder="{if $details.display.placeholder}{$details.display.placeholder}{/if}" 
       class="form-control"
       aria-describedby="label_{$name}"
       />
</div>
<select value="" class="form-control" name="search[where][{$name}][operator]">
    {if $details.value_type == 'string'}
    <option value="LIKE">Is like</option>
    <option value="NOT LIKE">Not like</option>
    {/if}
    {if $details.value_type == 'integer'}
    <option value="=">Egyenlő</option>
    <option value="<">Kisebb</option>
    <option value=">">Nagyobb</option>
    <option value="!=">Nem egyenlő</option>
    {/if}
    {if $details.value_type == 'boolean'}
    <option value="1">Igaz</option>
    <option value="0">Hamis</option>
    {/if}
</select>
<!-- field end -->