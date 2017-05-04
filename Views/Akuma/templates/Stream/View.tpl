{extends file="Global/Block.tpl"} 
{block name=content} 
    
    
    {if $item}
    <h1 class="heading">{$item.stream_title}</h1>
	
    <div class="panel">
	
	<div class="box">
	    <div class="box-item video-wrapper">
		<iframe src="http://player.twitch.tv/?channel={$item.stream_user}" frameborder="0" scrolling="no" height="500" width="830"></iframe>
	    </div>
	</div>
	    
	<div class="box">
	    <div class="box-item">
		{widget name=comment dir="Comment" controller=$controller item_id_key='stream_id' item_id=$item.stream_id}
	    </div>
	</div>
	    
    </div> 

    {else}
	<div class="msg info">This stream does not exists.</div>
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