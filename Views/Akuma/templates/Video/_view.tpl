{extends file="Global/_full.tpl"}
{block name=content}
<section id="content">
	<br>
    <div class="container">
	{if $item}
	<h1 class="heading">{$item.video_title}</h1>
		<div class="videoWrapper">
			<iframe src="http://www.youtube.com/embed/{$item.yt_id}" frameborder="0" allowfullscreen></iframe>
		</div>
        {include file="Global/_widget_comment.tpl" controller=$controller item_id_key='video_id' item_id=$item.video_id}
		<br>
		<br>
	{else}
	    <div class="msg info">This video does not exists.</div>
	{/if}
    </div>
</section>
{/block}