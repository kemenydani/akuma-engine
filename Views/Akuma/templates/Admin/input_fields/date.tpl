<div class="form-group">
    

<label class="control-label col-sm-1" for="field_{$name}">{$details.display.label}</label>
    <div class="col-sm-11">
        
        <input type="date" 
            class="form-control"
            
            name="{if $details.input_group}{$details.input_group}[{$name}]{else}{$name}{/if}" 
            id="field_{$name}" 

            value="{if $value}{$value|date_format:"Y-m-d"}{/if}"

        />
        <div class="col-lg-6">
            <div class="row">
                {if $details.display.note}
                    <p class="help-block"><small>{$details.display.note}</small></p>
                {/if}
            </div>
        </div>
        
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