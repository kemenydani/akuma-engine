<section id="slider">

    {assign var="news" value=$News->find(['active = 1', 'featured = 1'], 3)}
    
    <div id="left-control" class="control-button left-control">
	<i class="fa fa-chevron-left fa-2x"></i>
    </div>

    <div id="right-control" class="control-button right-control">
	<i class="fa fa-chevron-right fa-2x"></i>
    </div>

    <div id="slides" class="content">
	
	{foreach $news as $news_item}
	    
	<a href="{$base}news/view/{$news_item.news_id}/{$Language->url_slug($news_item.news_title)}">
	    
	    <div class="slide">
		
		<div class="container content">
		    <h1>{$news_item.news_title}</h1>
		    <p>{$news_item.slider_desc}</p>
		    <br>
		    <button type="button" class="button button-brand-border button-big button-rounded">READ MORE</button>
		</div>
		    
		<img src="{$base}Uploads/files/{$news_item.slider_image}">
		
	    </div>
	    
	</a>
	
	{/foreach}
	
    </div> <!-- .slides -->

    <script type="text/javascript">

	$(document).ready(function() {
	    
	    var options = {
		'container' : "#slider",
		'slide_container' : "#slides",
		'slides' : ".slide",
		'left_control' : "#left-control",
		'right_control' : "#right-control",
		'navigation' : "#slider-nav",
		'slide_interval' : 4000,
		'animation_speed' : 300,
		'direction' : 1
	    };

	    var SliderObject = new Slider(options);
	    
	    SliderObject.startSlider();
	});

    </script>

</section> <!-- #slider -->
