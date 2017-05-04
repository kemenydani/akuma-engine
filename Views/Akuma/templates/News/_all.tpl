{extends file="Global/_full.tpl"} 

{block name=content} 
<h1 class="heading">NEWS ARCHIVE</h1>

{if $items}
    
    
    {foreach $items as $news_item}
	   
	<img src="{$base}source/{$news_item.news_image}">
	
	<a href="{$base}news/view/{$news_item.news_id}/{$Language->url_slug($news_item.news_title)}">{$news_item.news_title|truncate: 30}</a>
	
    {/foreach}
    

{else}
    There are no news.
{/if}

{include file="Global/page.tpl" url='news/all/' total=$total pages=$pages current=$current}
  
{/block}