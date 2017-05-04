{extends file="Global/_full.tpl"} 

{block name=content}
<section id="content">
<br>
<h1 class="heading">TEAM MEMBERS</h1>
<div class="container">  

    {if $members}
	{foreach $members as $member}

	    <a href="{$base}user/profile/{$member.user_id}/">
	    {if $member.player_avatar}
		<img src="{$base}Uploads/files/{$member.player_avatar}">
	    {else}
		<img src="{$base}no-image.png">
	    {/if}
	    </a>

	    <h2>{user user_id=$member.user_id}</h2>

	    {if $member.facebook}<a href="{$member.facebook}"><i class="fa fa-facebook-square fa-1x" aria-hidden="true"></i></a>{/if}
	    {if $member.twitter}<a href="{$member.twitter}"><i class="fa fa-twitter fa-1x" aria-hidden="true"></i></a>{/if}
	    {if $member.youtube}<a href="{$member.youtube}"><i class="fa fa-youtube fa-1x" aria-hidden="true"></i></a>{/if}
	    {if $member.instagram}<a href="{$member.instagram}"><i class="fa fa-instagram fa-1x" aria-hidden="true"></i></a>{/if}
	    {if $member.twitch}<a href="{$member.twitch}"><i class="fa fa-twitch fa-1x" aria-hidden="true"></i></a>{/if}

	{/foreach}

    {else}
	Currently there are no players in this team.
    {/if}

    {include file='Teams/Matches.tpl'}

    {include file='Teams/Awards.tpl'}		

</div>
</section>
{/block}