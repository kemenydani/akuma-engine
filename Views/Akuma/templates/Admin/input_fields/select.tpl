<div class="form-group">

<label class="control-label col-sm-1" for="field_{$name}">{$details.display.label}:</label>
    <div class="col-sm-11">

        <select style="width: 300px; {if $details.display.multiple}height: 100px;{/if}" {if $details.display.multiple}multiple="multiple"{/if}
               name="{$name}{if $details.display.multiple}[]{/if}" 
               value="{if $value}{$value}{/if}"
               class="form-control"
               aria-describedby="label_{$name}"

        >
        
        {if $details.options}
            {*{if $details.display.placeholder}<option value="0" selected="true">{$details.display.placeholder}</option>{/if}*}
            {foreach $details.options as $optkey => $optval}
                 
                {if isset($value) && is_array(json_decode($value))}
                    
                    {assign var="value_array" value=json_decode($value)}

                    {if in_array($optval, $value_array)}
                        {assign var="found_key" value=array_search($optval, $value_array)}
                    {/if}
                    
                    <option {if (isset($value_array) && ($optval == $value_array[$found_key]))} selected="selected"{/if} value="{$optval}">{$optkey}</option> 
                    
                {else}
                    <option {if ($optval == $value)}selected="selected"{/if} value="{$optval}">{$optkey}</option> 
                {/if}

            {/foreach}
            
        {/if}

        </select>
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