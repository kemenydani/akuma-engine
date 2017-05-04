{assign var="result" value=$Gallery->find_gallery(['active = 1', 'featured = 1'],1)}

<h1 class="heading">FEATURED GALLERY</h1>
{if count($result.images) > 0}
<div id="ugw" style="display:none; overflow: hidden;" class="">
   

    {assign var="j" value=0}
    
    {foreach $result.images|@array_slice:0:8 as $image}
	<a href="">
	    <img
		alt=""
		src="{$base}{$image}"
		data-image="{$base}{$image}"
		data-description=""
		style="display:none">
	</a>
    {/foreach}
    
    
    {*
    {while ($j < count($result.images) && $j < 8 && ($j = $j+1))}
	
		<a href="">
	    <img
		alt=""
		src="{$base}{$result.images[$j]}"
		data-image="{$base}{$result.images[$j]}"
		data-description=""
		style="display:none">
	</a>
	
		
    {/while}
    *}
    {*
    {for $i = 0; $i < 8; $i++}

    {/for}
*}

</div>

{else}
    <div class="msg info">There are no images in this gallery.</div>
{/if}
    
<script type="text/javascript">
    $(document).ready(function(){
	
	
	    $("#ugw").unitegallery({
/*
					
					tile_width: 356,						//tile width
					tile_height: 356,						//tile height
					
					theme_gallery_padding: 0,				//padding from sides of the gallery
					grid_padding:0,						//set padding to the grid
					grid_space_between_cols: 15,			//space between columns
					grid_space_between_rows: 15,			//space between rows
					
					theme_auto_open:null,					//auto open lightbox at start - if some number gived, like 0
				
					gallery_theme: "tilesgrid",				//choose gallery theme (if more then one themes includes)
					gallery_width:"100%",				//gallery width
					gallery_min_width: 150,				//gallery minimal width when resizing
					gallery_background_color: "",		//set custom background color. If not set it will be taken from css.
							
				
					
					grid_num_rows:2,						//maximum number of grid rows. If set to big value, the navigation will not appear.
					
					tile_enable_border:true,			//enable border of the tile
					tile_border_width:0,				//tile border width
					
					tile_border_radius:0,				//tile border radius (applied to border only, not to outline)
					
					tile_enable_outline: false,			//enable outline of the tile (works only together with the border)
				
					
					tile_enable_shadow:false,			//enable shadow of the tile
			
		*/			
	    });
	   
    });
</script>