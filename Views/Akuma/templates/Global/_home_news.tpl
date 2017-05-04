<section id="news">
    {assign var="news" value=$News->find(['active = 1'], 4)}
    <div class="news-list container">
	{foreach $news as $news_item}
	<div class="news-list-item">
	    <div class="overlay">
			<div class="content">
				<h1>{$news_item.news_title|truncate:22}</h1>
				<p>{$news_item.news_quote|truncate:100}</p>
				<a href="{$base}news/view/{$news_item.news_id}/{$Language->url_slug($news_item.news_title)}" class="read-more">READ MORE</a>
			</div>
	    </div>
	    <img onerror="imgError(this)" src="{$base}Uploads/files/{$news_item.news_image}">
	</div> <!-- .news-list-item end -->
	{/foreach}
    </div> <!-- .news-list.container end -->
</section> <!-- #news end -->