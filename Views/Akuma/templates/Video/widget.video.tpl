{assign var=cover_thumbnail value=json_decode($video_items[0].thumbnails, true)}	

<article id="widget-news" class="card">
    <div class="body">
	<div class="content">
	    <ul class="list">
		<li class="head-item">
		    
		    <div class="head-img" style="background: url('{$cover_thumbnail.medium.url}')">
			
		    </div>

		    <div class="content">
			
			<h2 class="title">
			    <a href="">{$video_items[0].video_title}</a>
			</h2>

			<p>
			    {$items[0].news_quote|truncate:220:"...":true}
			</p>
			
		    </div>
		    
		</li>
		{for $i = 1; $i < count($video_items); $i++}
		    {assign var=item_thumbnail value=json_decode($video_items[$i].thumbnails, true)}
		    {*{$item_thumbnail.medium.url}*}
		    <li class="item"><a href="">{$video_items[$i].video_title}</a></li>
		{/for}
	    </ul>
	</div>
	    <div class="footer">
		
	    </div>
    </div>
</article> 