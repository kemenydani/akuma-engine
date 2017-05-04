{if $awards}
    
    <ul class="ul-list">
	{foreach $awards as $award}
	    <li>

		    {if $award.place == 1}
			#{$award.place}
		    {else if ($award.place == 2)}
			#{$award.place}
		    {else if ($award.place == 3)}
			#{$award.place}
		    {else}   
			#{$award.place}
		    {/if}


		    <a href="{$award.event_url}">{$award.event_name}</a>
		    <span class="pull-right">{$award.event_date|date_format}</span>

	    </li>
	{/foreach}
    </ul>
	
{else}
    <div class="msg info">This team hasn't got any achievments.</div>
{/if}