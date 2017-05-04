<div class="form-group">

<label class="control-label col-sm-1" for="field_{$name}">{$details.display.label}:</label>
<div class="col-sm-11">
        <input type="number" 
               name="{if $details.group}{$details.group}[{$name}]{else}{$name}{/if}" 
               value="{if $value}{$value}{/if}"
               placeholder="{if $details.display.placeholder}{$details.display.placeholder}{/if}" 
               class="form-control"
               id="field_{$name}"
               style="width: 300px;"

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