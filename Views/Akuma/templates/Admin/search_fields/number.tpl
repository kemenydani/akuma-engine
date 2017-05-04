<label>{$details.label}:</label>
<input type="number" 
       name="search[where][{$name}][param]" 
       value="{if $details.value}{$details.value}{/if}"
       placeholder="{if $details.placeholder}{$details.placeholder}{/if}" 
       class="form-control"
       style="width: 60px;"
       
/>

<select value="" class="form-control" name="search[where][{$name}][operator]">
    {if $details.value_type == 'string'}
    <option value="LIKE">Egyezik</option>
    <option value="NOT LIKE">Nem egyezik</option>
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