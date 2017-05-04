{extends file="Global/_full.tpl"}

{if $error}
    <div class="alert alert-info">{$error}</div>
{/if}


{block name=content} 
     <style>
         
        .form {
        }
         
        .field {
            margin-bottom: 4px;
            //background-color: #141414;
            //border-bottom: 1px dashed #242424;
        }
        .field input[type=text], input[type=email], input[type=password], select {
            background: black;
            border: 1px solid #242424;
            font-size: 13px;
            height: 25px;
            line-height: 25px;
            padding-left: 7px;
            padding-right: 7px;
            width: 98%;
        }
        
        textarea {
            background: black;
            border: 1px solid #242424;
            font-size: 13px;
            resize: vertical;
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

<div class="widget">
    <div class="widget-outer">
        <div class="widget-inner">
            <div class="widget-header">new<strong> message</strong></div>
            <div class="widget-body">
                
                <div style="">
                    {if !isset($success)}
                    <form action="{$base}user/sendmessage/" method="POST">
                    <div class="field">
                            <label>Title:</label>
                            <input type="text" {if $errors.message_title}style="border: 1px solid #802420;"{/if} value="{$data.message_title}" name="message_title" placeholder="Title">
                            {if $errors.message_title}
                            <div class="form-error">
                                <span style="">
                                    <ul>
                                    {foreach $errors.message_title as $error}
                                        <li>{$error}</li>
                                    {/foreach}
                                    </ul>
                                </span>
                            </div>
                            {/if}
                    </div>
                    <div class="field">
                        <label>To:</label>
                        <p style="color: #888; margin-bottom: 4px;">type in the user's name and choose from the suggestions</p>
                        <input type="text" value="{if $toid}{$toid.username}{/if}" id="to_id" name="to_id">
                    </div>
                    <div class="field">
                    <label>Message:</label>
                    <textarea name="message_content" style="width: 99%; height: 200px;"></textarea>
                    </div>
                    <input type="hidden" name="from_id" value="{$user.user_id}">
                    <br>
                    <br>
                    <center><input class="button button-big rounded-4-times" value="SEND" type="submit"></center>
                    
                    </form>  
                    {else}
                        <div style="font-size: 12px; background-color: #22B573; padding: 5px; border-radius: 4px;">The message has been sent.</div><br>
                    {/if}
                </div>
                
                
                
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
    {assign var="user_array" value=[]}
    {foreach $users as $user_item}
        {$user_array[] = $user_item.username}
    {/foreach}   

    
<script>

$(function() {
    var availableTags = $.parseJSON('{json_encode($user_array)}');
    $( "#to_id" ).autocomplete({
      source: availableTags
    });
  });
  </script>
{/block}