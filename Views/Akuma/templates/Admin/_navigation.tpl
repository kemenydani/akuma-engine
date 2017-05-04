<nav id="admin_navbar" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
	<div class="navbar-header">
	    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	    </button>
	    <a class="navbar-brand" href="{$base}admin/">ADMIN PANEL</a>
	</div>
	<div id="navbar" class="navbar-collapse collapse">
	    <ul class="nav navbar-nav">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
				<ul class="dropdown-menu">
				{if $user.level == 10}<li><a href="{$base}settings/admin/">Variables</a></li>{/if}
				{if $user.level == 10}<li><a href="{$base}categories/admin/">Categories</a></li>{/if}
				{*{if $user.level == 10}<li><a href="{$base}pages/admin/">Pages</a></li>{/if}*}
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Media <span class="caret"></span></a>
				<ul class="dropdown-menu">
				{if $user.level == 8 || $user.level == 10 || $user.level == 9}<li><a href="{$base}news/admin/">News</a></li>{/if}
				{*{if $user.level == 10}<li><a href="{$base}products/admin/">Shop</a></li>{/if}*}
				{if $user.level == 10}<li><a href="{$base}gallery/admin/">Gallery</a></li>{/if}
				{*{if $user.level == 10}<li><a href="{$base}coverages/admin/">Coverages</a></li>{/if}*}
				{*{if $user.level == 10}<li><a href="{$base}stream/admin/">Streams</a></li>{/if}*}
				{if $user.level == 10}<li><a href="{$base}video/admin/">Videos</a></li>{/if}
				{if $user.level == 10}<li><a href="{$base}filemanager/admin/">Filemanager</a></li>{/if}
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Team <span class="caret"></span></a>
				<ul class="dropdown-menu">
				{if $user.level == 10}<li><a href="{$base}teams/admin/">Teams</a></li>{/if}
				{if $user.level == 10}<li><a href="{$base}members/admin/">Members</a></li>{/if}
				{if $user.level == 6 || $user.level == 10 || $user.level == 9}<li><a href="{$base}matches/admin/">Matches</a></li>{/if}
				{if $user.level == 10}<li><a href="{$base}awards/admin/">Awards</a></li>{/if}
				{if $user.level == 10}<li><a href="{$base}about/admin/">About</a></li>{/if}
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Community <span class="caret"></span></a>
				<ul class="dropdown-menu">
				{if $user.level == 10}<li><a href="{$base}comment/admin/">Comments</a></li>{/if}
				{if $user.level == 10}<li><a href="{$base}user/admin/">Users</a></li>{/if}
				{if $user.level == 10}<li><a href="{$base}partners/admin/">Sponsors</a></li>{/if}
				{*{if $user.level == 10}<li><a href="{$base}adv/admin/">Advertisements</a></li>{/if}*}
				{*{if $user.level == 10}<li><a href="{$base}contact/admin/">Contacts</a></li>{/if}*}
				</ul>
			</li>
	    </ul>
		<p style="margin-right: 0px;" class="navbar-text navbar-right"><b>Signed in as <a href="#" class="navbar-link">{user user_id=$user.user_id}</a> | <a href="{$base}user/logout/"><i class="glyphicon glyphicon-off"></i> Logout</a></b></p>
	</div><!--/.nav-collapse -->
    </div>
</nav>