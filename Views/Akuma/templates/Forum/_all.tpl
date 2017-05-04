{extends file="Global/_full.tpl"}
{block name=content}
<section id="content" class="">
    <br><br>
    <h1 class="heading">BOARD</h1>

    <div class="container forum-list">
        {include file="Forum/_user_area.tpl"}
        {if $forums}
            <i class="logout fa fa-bar-chart fa-1x" aria-hidden="true"></i> There are {$total} forum threads, {count($forums)} of them on this page.
            <br>
            <br>
            {foreach $forums as $forum}
                <div class="forum-list-item">
                    <div class="forum-title">
                        <h2><a href="{$base}forum/threads/{$forum.forum_id}/">{$forum.forum_title}</a></h2>
                        <p>{$forum.forum_desc}</p>
                    </div>
                    <div class="last-poster pull-right">
                        {if $forum.comments[0]}
                        <i class="logout fa fa-user fa-1x" aria-hidden="true"></i> {user user_id=$forum.comments[0].poster_id}
                        <p><i>{$forum.comments[0].comment_text|truncate:30}</i></p>
                        <p><i class="logout fa fa-clock-o fa-1x" aria-hidden="true"></i> {$forum.comments[0].date_posted|relative_date}</p>
                        {/if}
                    </div>
                    <div class="child-count"><h1>{$forum.threads}</h1><p>topics</p></div>
                </div>
            {/foreach}
        {else}
            <center>There are no forum threads.</center>
            <br>
        {/if}
        {include file="Global/page.tpl" url='forum/all/' total=$total pages=$pages current=$current}
        <br>
    </div>
</section>


{/block}