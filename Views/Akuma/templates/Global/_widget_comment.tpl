<div class="container comment-container">

    <h1 style="" class="heading">COMMENTS</h1>

    {include file="Forum/_user_area.tpl"}

    {if $user}
        <form  class="comment-form" action="{$base}comment/add/" method="POST">
            <textarea name="comment_text"></textarea>
            <input type="hidden" name="controller" value="{$controller}">
            <input type="hidden" name="item_id_key" value="{$item_id_key}">
            <input type="hidden" name="item_id" value="{$item_id}">
            <input type="hidden" name="poster_id" value="{$user.user_id}">
            <input type="hidden" name="location" value="{$location}">
            <button type="submit" class="button button-dark button-big">Post comment</button>
        </form>
    {/if}
    <br>
    <div class="comments">
        {assign var="comments" value=$Comment->find(["controller = '`$controller`'", "item_id = `$item_id`"])}

        {foreach $comments as $comment}
            <div class="comment">
                <img onerror="imgError(this);" src="{if !$comment.avatar}{$base}uploads/nopic.png{else}{$base}{$comment.avatar}{/if}">
                <div class="comment-text">
                    <div class="poster-details">
                        <span class="comment-poster">{user user_id=$comment.poster_id}</span><span class="date">{$comment.date_posted|date_format}</span>
                    </div>
                    <p>{$comment.comment_text}</p>
                </div>
            </div>
            {foreachelse}
            <center>There are no comments yet. Be the first!</center>
            <br><br>
        {/foreach}

    </div>
</div>