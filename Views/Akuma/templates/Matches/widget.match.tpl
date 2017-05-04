<div class="panel">
{if $match_items}
{if $heading}
<h1 class="heading">LAST MATCHES</h1>
{/if}
<ul class="ul-list">
    {foreach $match_items as $match_item}

	{assign var=map value=json_decode($match_item.map, true)}
	{assign var=total_home_score value=0}
	{assign var=total_enemy_score value=0}
	{assign var=total_home_score_simple value=0}
	{assign var=total_enemy_score_simple value=0}

	{for $h = 0; $h < count($map); $h++}
	    {$total_home_score = $total_home_score+$map[$h].home_score}
	    {if ($map[$h].home_score > $map[$h].enemy_score)}
		{$total_home_score_simple = $total_home_score_simple+1}
	    {/if}
	{/for}

	{for $e = 0; $e < count($map); $e++}
	    {$total_enemy_score = $total_enemy_score+$map[$e].enemy_score}
	    {if ($map[$e].home_score < $map[$e].enemy_score)}
		{$total_enemy_score_simple = $total_enemy_score_simple+1}
	    {/if}
	{/for}

	<li>
	<a href="{$base}matches/view/{$match_item.match_id}">{$Category->getCatShort($match_item.category)} vs. {$match_item.enemy_name}</a>

	<span class="pull-right">
	{if $match_item.score_display_type == 0}

	    {if $total_home_score > $total_enemy_score}
		{$total_home_score}-{$total_enemy_score}
	    {else if ($total_home_score < $total_enemy_score)}
		{$total_home_score}-{$total_enemy_score}
	    {else}  
		{$total_home_score}-{$total_enemy_score}
	    {/if}

	{else}

	    {if $total_home_score_simple > $total_enemy_score_simple}
	       {$total_home_score_simple}-{$total_enemy_score_simple}
	    {else if ($total_home_score_simple < $total_enemy_score_simple)}
		{$total_home_score_simple}-{$total_enemy_score_simple}
	    {else}  
		{$total_home_score_simple}-{$total_enemy_score_simple}
	    {/if}

	{/if}

	{*{$Category->getCatShort($match_item.category)}*}
	</span>
	</li>
    {/foreach}
</ul>
    
{else}
    <div class="msg info">No matches to show.</div>
{/if}
</div>