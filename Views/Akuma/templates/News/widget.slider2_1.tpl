<section id="hg-slider">
    
    <div id="app">

	<div id="left-control" class="control-button left-control">
	    <i class="fa  fa-chevron-left"></i>
	</div>

	<div id="right-control" class="control-button right-control">
	    <i class="fa  fa-chevron-right"></i>
	</div>

	<div id="slides">

	    {foreach $slider_items as $news_slider_item}
		<div class="slide" style="background: url('{$base}source/{$news_slider_item.slider_image}')">
		    <div id="content">

		    </div>
		</div>
	    {/foreach}

	</div>

    </div>
    
</section>
{literal}
    
<script type="text/javascript">
    
var options = {
    'owner_id' : "#hg-slider",
    'slider' : "#app",
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