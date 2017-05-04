{extends file="Global/_full.tpl"}
{block name=content} 
    <style>
        .user-info-list {
            float: left;
        }
        .listitem {
            width: 100%;
            display: block;
        }
        .user-info-list ul {
            list-style-type: none;
        }
        .user-info-list ul li {
            width: 100%;
            border-bottom: 1px dashed #252525;
            padding-bottom: 3px;
            margin-right: 5px;
        }
        .user-info-list ul h4 {
            margin-bottom: 3px;
            margin-top: 3px;
            color: #ffdf20;
        }
        .user-info-list ul li:first-child {
            margin-top: -8px;
        }
        .blog-item {
            width: 100%;
            border-bottom: 1px dashed #252535;
            margin-bottom: 5px;
        }
        .comm-item {
            padding-bottom: 8px;
            margin-bottom: 5px;
            border-bottom: 1px dashed #252535;
        }
    </style>
        <div style="">
            <div class="widget">
                <div class="widget-outer">
                    <div class="widget-inner">
                    <div class="widget-header"><strong>profile of </strong> {$details.username}</div>
                        <div class="widget-body">

                            <div style="width: 100%; font-size: 13px;">

                                <div style="width: 274px; height: 274px; position: relative; border: 2px solid #ffdf20; float: left;">
                                    <div style="position: absolute; bottom: 8.5px; right: 7.5px;">
                                        <a href="{$base}user/sendmessage/{$details.user_id}/"><button style="margin-right: 7.5px;" class="button button-default">Send message</button></a>
                                        <button style="margin-right: 2px; display: none" class="button button-default">Add as friend</button>
                                    </div>
                                    <img style="width: 100%; height: 100%;" src="{if !$details.avatar}{$base}uploads/nopic.png{else}{$base}{$details.avatar}{/if}">
                                </div>

                                <div style=" float: left; width: 874px;">
                                    <div style="width: 100%; padding-left: 15px;">

                                        <div style="width: 20%" class="user-info-list">

                                            <h1 style="color: #ffdf20; margin-top: 0px;">{$details.username}</h1>
                                            {if $details.firstname && $details.lastname}
                                            <h2>{$details.firstname} {$details.lastname}</h2>
                                            {/if}
                                            {if $details.country_short}
                                            <h3>{country country_id=$details.country_short}</h3>
                                            {/if}
                                            {if $details.city}
                                            <h3>{$details.city}</h3>
                                            {/if}
                                            <div style="width: 100%"><h4 style="margin-bottom: 0px; color: #ffdf20;">Last online:</h4></div>
                                            <div style="width: 100%">{$details.last_seen|relative_date}</div>
                                            {if $details.showemail == 1}
                                            <div style="width: 100%"><h4 style="margin-bottom: 0px; color: #ffdf20;">Contact:</h4></div>
                                            <div style="width: 100%">{$details.email}</div>
                                            {/if}
                                        </div>
                                        {assign var="info" value=json_decode($details.user_info, true)}
                                        <div style="width: 40%" class="user-info-list">
                                            <ul>
                                                {if $info.cpu}
                                                <li>
                                                    <h4>CPU:</h4>
                                                    {$info.cpu}
                                                </li>
                                                {/if}
                                                {if $info.gpu}
                                                <li>
                                                    <h4>GPU:</h4>
                                                    {$info.gpu}
                                                </li>
                                                {/if}
                                                {if $info.mouse}
                                                <li>
                                                    <h4>Mouse:</h4>
                                                    {$info.mouse}
                                                </li>
                                                {/if}
                                                {if $info.mousepad}
                                                <li>
                                                    <h4>Mousepad:</h4>
                                                    {$info.mousepad}
                                                </li>
                                                {/if}
                                                {if $info.headset}
                                                <li>
                                                    <h4>Headset:</h4>
                                                    {$info.headset}
                                                </li>
                                                {/if}
                                                {if $info.keyboard}
                                                 <li>
                                                    <h4>Keyboard:</h4>
                                                    {$info.keyboard}
                                                </li>
                                                {/if}
                                            </ul>
                                        </div>
                                        <div style="width: 40%" class="user-info-list">
                                            <ul>
                                                {if $info.facebook}
                                                <li>
                                                    <h4>Facebook:</h4>
                                                    {$info.facebook}
                                                </li>
                                                {/if}
                                                {if $info.twitter}
                                                <li>
                                                    <h4>Twitter:</h4>
                                                    {$info.twitter}
                                                </li>
                                                {/if}
                                                {if $info.youtube}
                                                <li>
                                                    <h4>Youtube:</h4>
                                                    {$info.youtube}
                                                </li>
                                                {/if}
                                                {if $info.twitch}
                                                <li>
                                                    <h4>Twitch.tv:</h4>
                                                    {$info.twitch}
                                                </li>
                                                {/if}
                                                {if $info.hitbox}
                                                <li>
                                                    <h4>Hitbox.tv:</h4>
                                                    {$info.hitbox}
                                                </li>
                                                {/if}
                                                {if $info.steam}
                                                 <li>
                                                    <h4>Steam:</h4>
                                                    {$info.steam}
                                                </li>
                                                {/if}
                                            </ul>
                                        </div>

                                    </div>
      
                                </div>
                                <div class="clear"></div>
                                <hr>
                                <div style="" class="">
                                    
                                </div>
          

                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                
        <br>                                   
        <div class="widget">
            <div class="widget-outer">
                <div class="widget-inner">
                    <div class="widget-header"><strong>Teammates</strong></div>
                    <div class="widget-body">
                        <style>
                        .mate {
                            width: 180px;
                            height: 180px;
                            overflow: hidden;
                            float: left;
                            border: 1px solid #ffc314;
                            margin: 5px;
                            background-color: #ffc314;
                            border-radius: 4px;
                            -moz-border-radius: 4px;
                            -webkit-border-radius: 4px;
                        }
                        .mate-border {
                            
                        }
                        </style>
                        {foreach $teammates as $mate}
                            <div class="mate">
                                <div style="padding: 4px; color: black;">{$mate.username}</div>
                                <div class="mate-border">
                                <img style="width: 180px;" src="{if $mate.player_avatar}{$base}source/{$mate.player_avatar}{else}{$includes}Images/no_avatar.png{/if}">
                                </div>
                            </div>
                        {/foreach}
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
                                
        <br>
        
                <div class="widget" style="">
            <div class="widget-outer">
                <div class="widget-inner">
                    <div class="widget-header"><strong>Achievments</strong></div>
                    <div class="widget-body">
                        <style>
                        .mate {
                            width: 180px;
                            height: 180px;
                            overflow: hidden;
                            float: left;
                            border: 1px solid #ffc314;
                            margin: 5px;
                            background-color: #ffc314;
                            border-radius: 4px;
                            -moz-border-radius: 4px;
                            -webkit-border-radius: 4px;
                        }
                        .mate-border {
                            
                        }
                        </style>
                        
                        <style>                        
                            .widget .match {
                                height: 50px;
                                margin-bottom: 6px;
                                border: 1px solid #ffdf20;
                                padding: 5px;
                                border-radius: 5px;
                                background-color: black;
                                position: relative;
                                overflow: hidden;
                            }
                            .widget .match-button {
                                background-color: #ffdf20;width: 76px; border-top-left-radius: 5px; color: black; padding-left: 10px; padding-right: 0px; position: absolute; right: 0; bottom: 0; font-size: 12px; text-transform: none;

                            }
                        </style>
                        
                        {foreach $awards as $award}
                            <div class="match">
                                <div style="width: 50px; height: 100%; text-align: center; line-height: 50px; float: left;">
                                    {if $award.place == 1}
                                        <img style="margin-top: 12px;" src="{$includes}Images/award_gold.png">
                                    {else if ($award.place == 2)}
                                        <img style="margin-top: 12px;" src="{$includes}Images/award_silver.png">
                                    {else if ($award.place == 3)}
                                        <img style="margin-top: 12px;" src="{$includes}Images/award_bronze.png">
                                    {else}   
                                        <span style="font-family: TitleFont; font-size: 20px;">#{$award.place}</span>
                                    {/if}
                                </div>
                                <div style="width: 180px; overflow: hidden; font-family: TitleFont; line-height: 50px; font-size: 16px; text-transform: uppercase; font-weight: bold; padding-left: 10px; height: 50px; float: left;">
                                    <a href="{$award.event_url}">{$award.event_name}</a>
                                </div>
                              
                                <div class="clear"></div>
                            </div>
                        {foreachelse}
                            <div class="message infomsg">This team hasn't got any achievments.</div>
                        {/foreach}
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
                                
        <br>  
        
        <div style="{if $details.showblogs == 1 && $details.showcomments == 1}column-count: 2; -moz-column-count: 2; -webkit-column-count: 2{/if}">
        {if $details.showblogs == 1}                                    
        <div style="display: inline-block; width: 100%; ">
            <div class="widget" style="width: 100%;">
                <div class="widget-outer">
                    <div class="widget-inner">
                    <div class="widget-header"><strong>blog of </strong> {$details.username}</div>
                        <div class="widget-body">

                            <div style=" font-size: 13px;">
                                <div class="pad-15">
                                {foreach $blogs as $blog}
                                    <div class="blog-item">
                                        
                                        <h3 style="color: #ffdf20; margin-top: 0px; margin-bottom: 3px;">{$blog.blog_title}</h3>
                                        <div style="margin-bottom: 5px; font-style: italic;">{$blog.date_posted|date_format}</div>
                                        <p style="text-align: justify;">{$blog.blog_quote|truncate:180:" <a href='{$base}blog/view/{$blog.blog_id}/'>[...]</a>"}</p>
                                        <br>
                                    </div> 

                                {foreachelse}  
                                    <center>This user hasn't any blogs.</center>
                                {/foreach}
                                <div class="clear"></div>
                                </div>
                                
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {/if}
        {if $details.showcomments == 1}
        <div style="display: inline-block; width: 100%;">
            <div class="widget" style="">
                <div class="widget-outer">
                    <div class="widget-inner">
                    <div class="widget-header"><strong>last comments </strong></div>
                        <div class="widget-body">

                            <div style="width: 100%; font-size: 13px;">
                                <div class="pad-15">
                                {foreach $usercomments as $comm_item}
                                    <div class="comm-item">
                                        <div style="margin-bottom: 3px;">{user user_id=$details.user_id} said {$comm_item.date_posted|relative_date}: </div>
                                        <p><a href="{$base}{$comm_item.location}">{$comm_item.comment_text|truncate:140:" <a href='{$base}{$comm_item.location}'>[...]</a>"}</a></p>
                                    </div> 

                                {foreachelse}  
                                    <center>This user hasn't posted any comments.</center>
                                {/foreach}
                                <div class="clear"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {/if}
        </div>
        <div class="clear"></div>
        {if $details.commenting == 1}
        <div style="margin-top: 20px;">
            {$details.member_id}
        {widget name=comment dir="Comment" controller=$controller item_id_key='member_id' item_id=$details.member_id}    
        </div>
        {/if}                        
                                
{/block}