{extends file="Global/block.tpl"} 

{if $error}
    <div class="alert alert-info">{$error}</div>
{/if}


{block name=content} 
     <style>

        .field {
            margin-bottom: 4px;
            //background-color: #141414;
            //border-bottom: 1px dashed #242424;
        }
        .field input[type=text], input[type=email], input[type=password] {
            background: black;
            border: 1px solid #242424;
            font-size: 13px;
            height: 25px;
            line-height: 25px;
            padding-left: 7px;
            padding-right: 7px;
            width: 97%;
        }
        
        textarea {
            background: black;
            border: 1px solid #242424;
            font-size: 13px;
        }
        
        .field label {
            display: inline-block;
            font-size: 13px;
            width: 150px;
            color: #ffdf20;
            font-weight: bold;
            height: 25px; line-height: 25px;
            text-transform: uppercase;
        }
        .form-error {
            margin-top: 5px;
            margin-bottom: 10px;
           width: 100%;
           font-size: 12px;
           background-color: #802420;
        }
        .form-error ul {
        list-style-type: none;
        padding: 0px;
        margin: 0px;
        padding: 5px;
        }
        
        
    </style>   

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
            <div class="widget-header">MESSAGES OF<strong> {$user.username}</strong></div>
            <div class="widget-body">
                
                <center><a href="{$base}user/sendmessage/"><button type="button" class="button button-big rounded-4-times">Send a message</button></a></center>
                <br>
                {foreach $messages as $message}
                   
                    <div class="message">
                        <div class="pad-v-15">
                            <div class="msg-title">[#{$message@index+1}] {if $message.from_id == $user.user_id}(sent by you) to {user user_id=$message.to_id}: {else}received from <b>{user user_id=$message.from_id}</b>:  {/if}<span style="color: #ffdf20;">{$message.message_title}</span> <span style="float: right;">{$message.date_sent|date_format:"%A, %B %e, %Y"}</span></div>
                            <p>{$message.message_content}</p>
                        </div>
                    </div>
                    <br>
                    
                {foreachelse}
                    <center>You have no messages yet.</center>
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