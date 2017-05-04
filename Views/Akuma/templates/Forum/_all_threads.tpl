{extends file="Global/_full.tpl"}

{block name=content}
<section id="content">
    <br><br>
    <h1 class="heading">TOPICS IN {$forum.forum_title}</h1>
    <div class="container forum-list">
        {include file="Forum/_user_area.tpl" forum_id=$forum.forum_id}
        {if $threads}
            <i class="logout fa fa-bar-chart fa-1x" aria-hidden="true"></i> There are {$total} topics in this forum thread, {count($threads)} of them on this page.
        <br>
            <br>
        {foreach $threads as $thread}
            <div class="forum-list-item">
                <div class="forum-title">
                    <h2><a href="{$base}forum/thread/{$thread.thread_id}/{$Language->url_slug($thread.thread_title)}">{$thread.thread_title}</a></h2>
                    <p><i>{$thread.thread_text|truncate:100}</i></p>
                </div>
                {if (count($thread.comments))}
                    <div class="last-poster pull-right">
                        <i class="logout fa fa-user fa-1x" aria-hidden="true"></i>  {user user_id=$thread.comments.poster_id}
                        <p><i>{$thread.comments.comment_text|truncate:30}</i></p>
                        <p><i class="logout fa fa-clock-o fa-1x" aria-hidden="true"></i>  {$thread.comments.date_posted|relative_date}</p>
                    </div>
                {/if}
                <div class="child-count"><h1>{$thread.comment_count} <i class="logout fa fa-commenting-o fa-1x" aria-hidden="true"></i></h1></div>
            </div>
        {/foreach}
            <br>
            <br>
        {else}
            There are no threads in this forum.
        {/if}

        {include file="Global/page.tpl" url="forum/threads/`$location_array[2]`/" total=$total pages=$pages current=$current}
        <br>
    </div>

</section>
{/block}