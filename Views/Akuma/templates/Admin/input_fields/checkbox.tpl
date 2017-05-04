<div class="form-group">
    
<label class="control-label col-sm-1" for="field_{$field_name}">{$details.label}:</label>
    <div class="col-sm-11">
        
        <input style="vertical-align:middle; " type="checkbox"
            class=""
            
            name="{if $details.input_group}{$details.input_group}[{$field_name}]{else}{$field_name}{/if}" 
            id="field_{$field_name}" 

            value="{if $value}{$value}{/if}"
            placeholder="{if $details.placeholder}{$details.placeholder}{/if}" 

        />
        
    </div>
    <div class="col-sm-11 pull-right">
    {if $error}
	{foreach $error as $item}
	    <div class="alert alert-warning" role="alert">{$details.display.label}: {$item} {if strlen($value)}({$value}){/if}</div>
	{/foreach}
    {/if} 
    </div>
</div>
<!-- field end -->