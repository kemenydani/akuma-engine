<footer id="footer">
    
    <div class="container-fluid bg-dark-80">
	
	<div class="container">
	    
	    <div class="navigation">
		<a href="{$base}about">ABOUT</a>
		<a href="{$base}teams">SQUADS</a>
		<a href="{$base}partners">PARTNERS</a>
		<a href="{$base}downloads">DOWNLOADS</a>
		<a href="{$base}forum">BOARD</a>
	    </div>
	    
	</div> <!-- .container end -->
	    
    </div> <!-- .container-fluid end -->
	    
    <div class="container-fluid">
	
	<div class="container">
	    
	    <div class="about">
		<a href="{$base}">
		    <img src="{$includes}images/header-logo.png" alt=""/>
		</a>
		<h1>TEAM AKUMA</h1>
		{assign var="about_info" value=$About->find([],1)}
		<p>{if $about_info}{$about_info['about_short']|truncate:250}{/if}</p>
	    </div>
	    
	</div> <!-- .container end -->
	    
    </div> <!-- .container-fluid end -->
	    
    <div class="container-fluid info-bar bg-dark">
	
	<div class="container">
	    
	    <div class="copyright">
		COPYRIGHTS © 2016 BY&nbsp;<a href="{$base}">TEAM AKUMA</a>
	    </div>
	    
	    <div class="social-media">
		
		<a href="" class="icon icon-circular">
		    <i class="fa fa-facebook" aria-hidden="true"></i>
		</a>
		<a href="" class="icon icon-circular">
		    <i class="fa fa-twitter" aria-hidden="true"></i>
		</a>
		<a href="" class="icon icon-circular">
		    <i class="fa fa-youtube" aria-hidden="true"></i>
		</a>
		<a href="" class="icon icon-circular">
		    <i class="fa fa-twitch" aria-hidden="true"></i>
		</a>
		
	    </div> <!-- .social-media end -->
	    
	</div> <!-- .container end -->
	    
    </div> <!-- .container-fluid end -->
	    
</footer> <!-- #footer end -->