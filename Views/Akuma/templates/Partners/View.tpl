{extends file="Global/Block.tpl"} 

{block name=content} 
    
    {if $item}
	
    <h1 class="heading">{$item.partner_name}</h1>
    
    <div class="panel">
	<center><img onerror="imgError(this);" src="{$base}Uploads/files/{$item.partner_img_big}"></center>
	<br>
	<div class="box">
	    {$item.description}
	</div>
	    
    </div> 
	<hr>
	<center>
	    <br>
	    <a href="{$item.partner_url}"><button type="button">Visit website</button></a>
	</center>
	    
    {else}
	<div class="msg info">This video does not exists.</div>
    {/if}
	    
{/block}

{block name=block}
     {include file='Global/FacebookWidget.tpl'}
     <br>
     <br>
     {widget name=match dir="Matches" heading=true limit=5}
     <br>
     <br>
     {include file='Stream/wg.stream.tpl'}
          <br>
     <br>
     {include file='Adv/Advertisement_aside.tpl'}
{/block}