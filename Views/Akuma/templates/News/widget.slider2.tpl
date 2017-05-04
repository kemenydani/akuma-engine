<section id="hg-slider">
    
    	<div id="left-control" class="control-button left-control">
	    <i class="fa fa-chevron-left fa-2x"></i>
	</div>

	<div id="right-control" class="control-button right-control">
	    <i class="fa fa-chevron-right fa-2x"></i>
	</div>

    
    <div id="app3">

	<div id="slides" class="content">
	    {foreach $slider_items as $news_slider_item}
		<a href="{$base}news/view/{$news_slider_item.news_id}/{$Language->url_slug($news_slider_item.news_title)}">
		<div class="slide">
		    
			<img src="{$base}Uploads/files/{$news_slider_item.slider_image}">
		    
		</div>
			</a>
	    {/foreach}
	</div>
    </div>
    
    

    </div>
    
</section>
{literal}
    
<script type="text/javascript">
    
var options = {
    'owner_id' : "#hg-slider",
    'slider' : "#app3",
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

$(document).ready(function() {
    SliderObject.startSlider();
});

</script>

{/literal}