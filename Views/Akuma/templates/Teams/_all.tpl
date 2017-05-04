{extends file="Global/_full.tpl"} 

{block name=content}
<section id="content">
	<br>
	<h1 class="heading">TEAMS</h1>
	<div class="container">
	{if $items}

	{foreach $items as $team}

	    <a href="{$base}teams/view/{$team.team_id}/">
		<h1 class="absolute-title" style="color: white;">{$team.team_name}</h1>
		{$base}Uploads/files/{$team.team_image}
	    </a>

	{/foreach}

	{else}
	    There are no teams.
	{/if}

    </div>
</section>
{/block}

