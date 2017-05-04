{extends file="Global/Block.tpl"} 
{block name=content} 

<h1 class="heading">MATCH DETAILS</h1>

{if $item}

    {assign var=map value=json_decode($item.map, true)}
    {assign var=total_home_score value=0}
    {assign var=total_enemy_score value=0}

    {assign var=total_home_score_simple value=0}
    {assign var=total_enemy_score_simple value=0}

    {for $h = 0; $h < count($map); $h++}
        {if ($map[$h].home_score > $map[$h].enemy_score)}
            {$total_home_score_simple = $total_home_score_simple+1}
        {/if}
    {/for}

    {for $e = 0; $e < count($map); $e++}
        {if ($map[$e].home_score < $map[$e].enemy_score)}
            {$total_enemy_score_simple = $total_enemy_score_simple+1}
        {/if}
    {/for}

<div class="panel">
    
    <div class="tile-group flex-justify-content-space-between display-flex flex-wrap flex-align-items-space-between">
	
	<div class="tile text-center">
	    <div class="content">
		<div>
		<h2>{team team_id=$item.home_team_id}</h2>
		</div>
		<div>
		<h1 class="padding-15">
		{if $map}

		    {for $i = 0; $i < count($map); $i++}
			{$total_home_score = $total_home_score+$map[$i].home_score}
		    {/for}

		    {if $match_item.score_display_type == 0}{$total_home_score}{else}{$total_home_score_simple}{/if}

		{else}
		    0
		{/if}
		</h1>
		</div>
	    </div>
	</div>
	    
	<div class="tile text-center">
	    <div class="content">
		<div>
		<h2>{$item.enemy_name}</h2>
		</div>
		<div class="padding-15">
		<h1>
		{if $map}

		    {for $i = 0; $i < count($map); $i++}
			{$total_enemy_score = $total_enemy_score+$map[$i].enemy_score}
		    {/for}

		    {if $match_item.score_display_type == 0}{$total_enemy_score}{else}{$total_enemy_score_simple}{/if}

		{else}
		0
		{/if}
		</h1>
		</div>
	    </div>
	</div>
	
    </div>

		<br>
	{if count($map)}
	<h2 class="heading">MAPS PLAYED</h2>
	<ul class="ul-list">
	    
	{for $i = 0; $i < count($map); $i++}
	    <li class="display-flex flex-directin-column flex-justify-content-space-between">
		<span>{$map[$i].name}</span>

		<span>{$map[$i].home_score} - {$map[$i].enemy_score}</span>
	    </li>
	{/for} 
	
	 </ul> 

	{/if}
    <br>
</div>	    

{widget name=comment dir="Comment" controller=$controller item_id_key='match_id' item_id=$item.match_id}

{else}
    <div class="msg error">This match does not exists. Maybe it is deleted.</div> 
{/if}

{/block}

{block name=block}
   {include file='Global/FacebookWidget.tpl'}
        <br>
     <br>
     {include file='Adv/Advertisement_aside.tpl'}
{/block}