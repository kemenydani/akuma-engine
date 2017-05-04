<div class="menu">
    
    <div class="menu-toggle menu-button">
	    <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
    </div>

    <div id="menu-dropdown" class="dropdown">
	<div class="container">
	    <ul class="teams">
	    <h2>TEAMS</h2>
		{foreach $Team->order($Team->find(['active = 1'])) as $team}
		    <li><a href="{$base}teams/view/{$team.team_id}/">{$team.team_name}</a></li>
		{/foreach}
	    </ul>
	    <ul class="menu">
		<h2>MEDIA</h2>
		<li><a href="{$base}">Home</a></li>
		<li><a href="{$base}teams/">Members</a></li>
		<li><a href="{$base}stream/">Streams</a></li>
		<li><a href="{$base}gallery/">Pictures</a></li>
		<li><a href="{$base}video/">Videos</a></li>
		
	    </ul>
	    <ul class="sponsors">
		<h2>SPONSORS</h2>
		{foreach $Sponsor->order($Sponsor->find(['featured = 1'])) as $sponsor}
		    <li><a href="{$base}partners/view/{$sponsor.partner_id}">{$sponsor.partner_name}</a></li>
		{/foreach}
	    </ul>
	    <ul class="other">
		<h2>OTHER</h2>
		<li><a href="{$base}contact/">Contact us</a></li>
		<li><a href="{$base}awards/">Awards</a></li>
		<li><a href="{$base}products/">Shop</a></li>
		<li><a href="{$base}about/">About</a></li>
	    </ul>

	    {if !$user}
		{include file="Global/Login.tpl"}
	    {/if}
	    
	</div>
    </div>
    
</div>

<script>
$( document ).ready(function() {
    $( ".menu-toggle" ).click(function(event) {
	$("#menu-dropdown").slideToggle( "fast");
	event.stopPropagation();
    });
    /*
    $( "#wrapper" ).click(function () {
	$("#menu-dropdown" ).slideUp("fast");
    });
    */
});
</script>