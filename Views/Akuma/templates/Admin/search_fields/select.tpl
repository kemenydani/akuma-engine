<div class="input-group input-group-sm">
<span class="input-group-addon" id="label_{$name}"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>&nbsp;{$details.display.label}</span>
<select 
       name="search[where][{$name}][param]" 
       value="{if $details.value}{$details.value}{/if}"
       class="form-control"
       aria-describedby="label_{$name}"

>
{if $details.options}
    <option>(not selected)</option>
    {foreach $details.options as $key => $value}
        <option {if $details.value == $value}selected="selected"{/if} value="{$value}">{$key}</option>
    {/foreach}
{/if}

</select>
</div>
<input type="hidden" name="search[where][{$name}][operator]" value="=">
<!-- field end -->