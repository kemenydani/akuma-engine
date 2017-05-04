{extends file="Global/_full.tpl"}
{block name=content}
<section id="content">
	<br>
	<br>
    <div class="container">
	    <h1>{$item.news_title}</h1>
	    <hr>
	    <p class="text-justify"><b>{$item.news_quote}</b></p>
	    <br>
	    <p>{$item.news_long}</p>
	    <hr>
        {include file="Global/_widget_comment.tpl" controller=$controller item_id_key='news_id' item_id=$item.news_id}
		<br>
		<br>
    </div>
</section>
{/block}