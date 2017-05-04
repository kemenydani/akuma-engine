{extends file="Global/_full.tpl"} 

{block name=content} 
    
<div class="container"> 
    
    <h1 class="heading">LATEST VIDEOS</h1>

    <div class="panel">

	{if $items}
	    
	<div class="box video-list">
	    
	    {foreach $items as $video}
		
		{assign var=thumbnails value=json_decode($video.thumbnails, true)}
		
		<div class="box-item video-item">
		    <div class="headline">
			<div class="content">
			    <a href="{$base}video/view/{$video.video_id}/{$Language->url_slug($item.video_title)}">
				<img src="{$thumbnails.medium.url}">
			    </a>
			</div>
		    </div>

		     <a href="{$base}video/view/{$video.video_id}/{$Language->url_slug($item.video_title)}">{$video.video_title}</a>

		</div>
		     
	    {/foreach}
	    
	</div>
	
	{else}
	    <div class="msg info">There are no videos.</div>
	{/if}

    </div>   

    {include file="Global/page.tpl" url='video/all/' total=$total pages=$pages current=$current}

</div>

{/block}