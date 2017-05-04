{extends file="Global/Block.tpl"} 

{block name=content} 
    
<h1 class="heading">LATEST MATCHES</h1>
<div class="panel">
    
    {if $items}
    <ul class="ul-list">
	{foreach $items as $match_item}

	    {assign var=map value=json_decode($match_item.map, true)}
	    {assign var=total_home_score value=0}
	    {assign var=total_enemy_score value=0}

	    {for $h = 0; $h < count($map); $h++}
		{$total_home_score = $total_home_score+$map[$h].home_score}
	    {/for}

	    {for $e = 0; $e < count($map); $e++}
		{$total_enemy_score = $total_enemy_score+$map[$e].enemy_score}
	    {/for}

	    
	    <li class="display-flex flex-directin-column flex-justify-content-space-between">
		
	    {$Category->getCatName($match_item.category)} vs. {$match_item.enemy_name}

	    {if $total_home_score > $total_enemy_score}
		<span style="color: #12ff00;">{$total_home_score}-{$total_enemy_score}</span>
	    {else if ($total_home_score < $total_enemy_score)}
		<span style="color: #ff0000;">{$total_home_score}-{$total_enemy_score}</span>
	    {else}  
		<span style="color: #ffdf20;">{$total_home_score}-{$total_enemy_score}</span>
	    {/if}
	    
	    <a href="{$base}matches/view/{$match_item.match_id}/">
		<button class="flex-self-align-center">Show details</button>
	    </a>

	    </li>
	    
	{/foreach}
    </ul>
    {else}
	<div class="msg info">There are no matches.</div> 
    {/if}
    
    {include file="Global/page.tpl" url='matches/all/' total=$total pages=$pages current=$current}
    
{/block}

{block name=block}
    {include file='Global/FacebookWidget.tpl'}
         <br>
     <br>
     {include file='Adv/Advertisement_aside.tpl'}
{/block}
