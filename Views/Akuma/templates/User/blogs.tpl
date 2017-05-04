{extends file="Global/block.tpl"} 

{if $error}
    <div class="alert alert-info">{$error}</div>
{/if}


{block name=content} 

<style>
    .message {
        width: 100%;
        text-align: left !important;
    }
    .msg-title {
        width: 100%;
        height: 35px;
        line-height: 35px;
        border-bottom: 1px dashed #222222;
        margin-bottom: 5px;
    }
</style>
    
<div class="widget">
    <div class="widget-outer">
        <div class="widget-inner">
            <div class="widget-header">BLOGS OF<strong> {$user.username}</strong></div>
            <div class="widget-body">

                {foreach $blogs as $blog}
                   
                    <div style="width: 830px; padding: 10px; border: 1px solid yellow; margin-bottom: 10px; border-radius: 15px;">
                        <div style="width: 100%; height: 35px; line-height: 35px; margin-bottom: 5px;">
                            <span style="font-family: TitleFont; font-size: 16px;">{$blog.blog_title}</span>
                            <span style="float: right;">
                                <a href="{$base}user/deleteblog/{$blog.blog_id}/"><button onclick="return confirm('Are you sure?')" type="button" style="margin-right: 5PX;" class="button button-small rounded-4-times">delete</button></a>
                                <a href="{$base}user/editblog/{$blog.blog_id}/"><button type="button" class="button button-small rounded-4-times">edit</button></a>
                            </span>
                        </div>
                        <div style="width: 100%; text-align: justify;">
                            <p style="color: #888;">{$blog.blog_quote}</p>
                            <br>
                            <span style="float: left;">{if $blog.active == 0}<span style="color: red;">The blog is inactive because it's new, or the content of the blog has been changed, wait until an admin activates it.</span>{else}<span style="color: green;">Active</span>{/if}</span>
                            <span style="float: right;">{$blog.date_posted|date_format}</span>
                            <br>
                         
                        </div>
                        <div class="clear"></div>
                        
                    </div>
                    
                {foreachelse}
                    <center>There are no blogs to show.</center>
                {/foreach}
                
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>  
{/block}

{block name=block}
        <div class="pad-b-15">
        {widget name=news dir="Widgets" limit=5}
    </div>
<div class="pad-b-15">
    {widget name=match dir="Matches" limit=5}
</div>
{/block}