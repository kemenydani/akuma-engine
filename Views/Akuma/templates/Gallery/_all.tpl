{extends file="Global/_full.tpl"} 

{block name=content} 
    
<div class="container">    
    
    <h1 class="heading">ALBUMS</h1>
    <div class="panel">

	{if $items}

	<div class="box video-list">
	    {foreach $items as $gallery}
		<div class="box-item video-item">
		    <div class="headline">
			<div class="content">
			    {if $gallery.headline_image}
				<a href="{$base}gallery/view/{$gallery.gallery_id}/{$Language->url_slug($gallery.gallery_name)}">
				    <img onerror="imgError(this);" src="{$base}Uploads/files/{$gallery.headline_image}">
				</a>
			    {else}
			       sadasd 
			    {/if}
			</div>
		    </div>
		    <a href="{$base}gallery/view/{$gallery.gallery_id}/{$Language->url_slug($gallery.gallery_name)}">{$gallery.gallery_name}</a>  
		</div>
	    {/foreach}
	</div>

	{else}
	    <div class="message infomsg">There are no news.</div>
	{/if}

    </div>     

    {include file="Global/page.tpl" url='gallery/all/' total=$total pages=$pages current=$current}

</div>  
    
{/block}