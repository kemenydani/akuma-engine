<section id="about">
    
    <div class="container">
	
	<h1 class="headline-rounded headline-dark headline-big">TEAM AKUMA</h1>

	{assign var="about_info" value=$About->find([],1)}
	
	<p class="big-text">
	    {if $about_info}{$about_info['about_short']|truncate:380}{/if}
	</p>

	<a href="">
	    <button type="button" class="button button-dark button-big">FACEBOOK</button>
	</a>
	
    </div> <!-- .container -->
	
</section> <!-- .#about -->