<section id="articles">
    {assign var="articles" value=$News->find(['active = 1'], 6)}
    <br>
    <h1 class="headline-rounded headline-dark headline-big">ARTICLES</h1>
    <br>
    <div class="container">
		<div class="article-slider">
			<div class="arrow prev">
				<i class="fa fa-2x fa-angle-left" aria-hidden="true"></i>
			</div>
			<div class="arrow next">
				<i class="fa fa-2x fa-angle-right" aria-hidden="true"></i>
			</div>
	    	<div class="article-list">
			{foreach $articles as $article_item}
			<div class="article-list-item">
				<div class="image">
					<img onerror="imgError(this)" src="{$base}Uploads/files/{$article_item.news_image}">
				</div>
				<h1>{$article_item.news_title}</h1>
				<p class="big-text teaser">{$article_item.news_quote}</p>
				<p class="big-text">{*{$article_item.news_long}*}</p>
				<a href="{$base}news/view/{$article_item.news_id}/{$Language->url_slug($article_item.news_title)}"><button type="button" class="button button-dark button-big">READ MORE</button></a>
				<br>
				<br>
			</div>
			{/foreach}
	    	</div> <!-- .article-list end -->
		</div> <!-- article-slider end -->
    </div> <!-- .container end -->
</section> <!-- a#articles end -->