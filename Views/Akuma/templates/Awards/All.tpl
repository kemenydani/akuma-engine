{extends file="Global/Block.tpl"} 

{if $error}
    <div class="alert alert-info">{$error}</div>
{/if}


{block name=top}
    {widget name=partners dir="Partners" limit=4}
{/block}


{block name=content} 
<h1 class="heading">AWARDS</h1>
<div class="panel">
   
    {if $awards}
	<ul class="ul-list">
	{foreach $awards as $award}
	    <li>
		#{$award.place} 
		{$award.event_name}
		<span class="pull-right">{team team_id=$award.team_id} {$award.event_date|date_format}</span>
	    </li>
	    
	{/foreach}
	</ul>
    {else}
	 <div class="msg info">There are no awards.</div>
    {/if}
    
    {include file="Global/page.tpl" url='awards/all/' total=$total pages=$pages current=$current}
    
</div>   


    
{/block}


{block name=block}
         {include file='Global/FacebookWidget.tpl'}
     <br>
     <br>
     {widget name=match dir="Matches" heading=true limit=5}
     <br>
     <br>
     {include file='Stream/wg.stream.tpl'}
          <br>
     <br>
     {include file='Adv/Advertisement_aside.tpl'}
{/block}
