<section id="media">
		    
    <div class="container">
	<h1 class="headline-rounded headline-dark headline-big">MEDIA</h1>

	<p class="big-text">
	   Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
	</p>
    </div>

    {assign var="media_items" value=$Video->find(['active = 1'], 10)}
    
    <div class="media-content container-fluid">
	
	{foreach $media_items as $media_item}
	    
	{assign var=thumbnails value=json_decode($media_item.thumbnails, true)}
	
	<div class="media-item item-album">
	    
	    <div class="overlay">
		
		<div class="content">
		    <h5>{$media_item.video_title|truncate:28}</h5>
		    <h6>ESL COLOGNE 2016</h6>
		    <a href="{$base}video/view/{$media_item.video_id}/{$Language->url_slug($media_item.video_title)}" class="video-icon">
			<i class="fa fa-chevron-right "></i>
		    </a>
		</div>
			
	    </div>
			
	    <img src="{$thumbnails.medium.url}">
	    
	</div>

	{/foreach}  
	    
    </div>

</section>