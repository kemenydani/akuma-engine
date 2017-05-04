<h1 class="heading">COMMENTS</h1>
   
<div class="panel">
    {if $user}
    <div class="box">
	<form  class="comment-form" action="{$base}comment/add/" method="POST">
	    
	    <div class="content-creation">
		
		<div class="comment-avatar">
		    <div class="content">
			<img onerror="imgError(this);" src="{if !$user.avatar}{$base}uploads/nopic.png{else}{$base}{$user.avatar}{/if}">
		    </div>
		</div>
		<textarea name="comment_text"></textarea>
		
	    </div>
	    

	    <input type="hidden" name="controller" value="{$controller}">
	    <input type="hidden" name="item_id_key" value="{$item_id_key}">
	    <input type="hidden" name="item_id" value="{$item_id}">
	    <input type="hidden" name="poster_id" value="{$user.user_id}">
	    <input type="hidden" name="location" value="{$location}">

	    <center>
		<button type="submit">Post comment</button>
	    </center>

	</form>
    </div>

    {else}
	<div class="msg info">Commenting is only available for registered users. Please log in or register <a href="{$base}user/register/">here</a>.</div>
	<br>
    {/if}
    <div class="box comments">
	
	{foreach $comments as $comment}
	    <div class="box-item comment">
		<div class="comment-avatar">
		    
		    <div class="content">
			<img onerror="imgError(this);" src="{if !$comment.avatar}{$base}uploads/nopic.png{else}{$base}{$comment.avatar}{/if}">
		    </div>
 
		</div>
		    
		<div class="comment-text">
		    {user user_id=$comment.poster_id}<span class="date">{$comment.date_posted|date_format}</span>
		    <p>{$comment.comment_text}</p>
		</div>   
	    </div>
	{foreachelse}
	    <div class="msg info">There are no comments yet. Be the first!</div>
	{/foreach}
	
    </div>
</div>