<div id="widget-news-highlighted" class="tile-group display-flex flex-wrap">
    
    {section name=headline start=0 max=1 loop=$items}
	<div class="tile margin-0">
	    <div class="content">
		<h1><a href="{$base}news/view/{$items[headline].news_id}/{$Language->url_slug($items[headline].news_title)}">{$items[headline].news_title|truncate:40:"...":true}</a></h1>
		<p>{$items[headline].news_quote|truncate:150:"...":true}</p>
	    </div>
	</div>
	
	<div class="tile margin-0">
	    <div class="content">
		<a href="{$base}news/view/{$items[headline].news_id}/{$Language->url_slug($items[headline].news_title)}">
		    <img onerror="imgError(this);" src="{$base}Uploads/files/{$items[headline].news_image}">
		</a>
	    </div>
	</div>
   
    {/section}
    
</div>  
    
<div id="widget-news" class="tile-group display-flex flex-wrap">
    {section name=archive start=1 max=5 loop=$items}
	<div class="tile">
	    <div class="tile-body display-flex flex-wrap flex-justify-content-center text-center">
		<div class="img-featured">
		    <a href="{$base}news/view/{$items[archive].news_id}/{$Language->url_slug($items[archive].news_title)}">
			<img onerror="imgError(this);" src="{$base}Uploads/files/{$items[archive].news_image}">
		    </a>
		</div>
		<div class="width-100">
		    <h3><a href="{$base}news/view/{$items[archive].news_id}/{$Language->url_slug($items[archive].news_title)}">{$items[archive].news_title|truncate:40:"...":true}</a></h3>
		</div>
		<div class="width-100">
		    <p>{$items[archive].date_posted|date_format}</p>
		</div>
	    </div>
	</div>
    {/section} 
</div> 