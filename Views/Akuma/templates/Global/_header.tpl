<header id="header">
    
    <div class="container">
	
	<a class="brand" href="{$base}">
	    <img src="{$includes}images/header-logo.png" alt=""/>
	</a>

	<input type="checkbox" id="nav-trigger" class="nav-trigger" />
	
	<label for="nav-trigger">
	    <i class="fa fa-3x fa-bars" aria-hidden="true"></i>
	</label>

	<div id="scrollnav" class="navigation">
		{if $controller === "home"}
			<a href="{$base}">HOME</a>
			<a href="#about">ABOUT</a>
			<a href="#news">NEWS</a>
			<a href="#articles">ARTICLES</a>
			<a href="#teams">TEAMS</a>
			<a href="#media">MEDIA</a>
		{else}
			<a href="{$base}">HOME</a>
			<a href="{$base}about">ABOUT</a>
			<a href="{$base}news">NEWS</a>
			<a href="{$base}teams">TEAMS</a>
			<a href="{$base}partners">PARTNERS</a>
			<a href="{$base}downloads">DOWNLOADS</a>
			<a href="{$base}forum">BOARD</a>
		{/if}
	</div> <!-- .navigation end -->

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
	    
	</div> <!-- #header .social-media end -->
	
    </div> <!-- #header .container end -->
    
</header> <!-- #header end -->

<script>
	// from: http://codepen.io/chriscoyier/pen/dpBMVP?css-preprocessor=none
	// Select all links with hashes
	$('a[href*="#"]')
	// Remove links that don't actually link to anything
		.not('[href="#"]')
		.not('[href="#0"]')
		.click(function(event) {
			// On-page links
			if (
				location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
				&&
				location.hostname == this.hostname
			) {
				// Figure out element to scroll to
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				// Does a scroll target exist?
				if (target.length) {
					// Only prevent default if animation is actually gonna happen
					event.preventDefault();
					$('html, body').animate({
						scrollTop: target.offset().top - 89
					}, 1000, function() {
						// Callback after animation
						// Must change focus!
						var $target = $(target);
						/*
						$target.focus();
						if ($target.is(":focus")) { // Checking if the target was focused
							return false;
						} else {
							$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
							$target.focus(); // Set focus again
						};
						*/
					});
				}
			}
		});

</script>