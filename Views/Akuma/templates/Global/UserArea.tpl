<div class="user">
    {if !$user}
	<i class="menu-toggle fa fa-user-circle-o fa-2x" style="cursor: pointer" aria-hidden="true"></i>
    {else}
	<a class="username" href="{$base}user/profile/{$user.user_id}/">{$user.username}</a>
	{if $user.level == 10 || $user.level == 6 || $user.level == 7 || $user.level == 8 || $user.level == 9}
	    <a target="blank" href="{$base}admin/">
		<i class="admin fa fa-hand-paper-o fa-1x"></i>
	    </a>
	{/if}
	<a href="{$base}user/editprofile/"><i class="logout fa fa-cog fa-1x" aria-hidden="true"></i></a>
	<a href="{$base}user/logout/"><i class="logout fa fa-power-off fa-1x" aria-hidden="true"></i></a>
    {/if}
</div>