<ol class="breadcrumb">
    <li><a href="{$base}admin/">Admin panel</a></li>
    {for $i = 0; $i < count($location_array); $i++}
	{if ($i == 0)}
	    <li class="active"><a href="{$base}{$location_array[$i]}/admin/">{$location_array[$i]}</a></li>
	{else}
	    <li class="active">{$location_array[$i]}</li>
	{/if}

    {/for}
</ol>