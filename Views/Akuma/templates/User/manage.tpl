{extends file="Global/_full.tpl"}
{block name=content} 
     <style>
         
        .form {
        }
         
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
            width: 98%;
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
    
        <div style="">
            <div class="widget">
                <div class="widget-outer">
                    <div class="widget-inner">
                    <div class="widget-header"><strong>profile of </strong> {$details.username}</div>
                        <div class="widget-body">

                            <div style="width: 100%; font-size: 13px;">
                                
                                <div style="width: 40%; float: right;">
                                    <div style="width: 278px; margin: 0px auto; height: 278px; border: 1px dashed #666;">
                                        {$details.username}
                                    </div>
                                </div>
                                
                                
                                <div style="width: 60%; float: left;">
                                    
                                <form method="POST" class="form form-vert" action="{$base}user/manage/{$user.user_id}/">

                                    <h2>PERSONAL</h2>
                                    
                                    <div class="field">
                                        <label>Username:</label>
                                        <input type="text" {if $errors.username}style="border: 1px solid #802420;"{/if} value="{$user.username}" name="username" placeholder="Username">
                                        {if $errors.username}
                                        <div class="form-error">
                                            <span style="">
                                                <ul>
                                                {foreach $errors.username as $error}
                                                    <li>{$error}</li>
                                                {/foreach}
                                                </ul>
                                            </span>
                                        </div>
                                        {/if}
                                    </div>
                                    <div class="field">
                                        <label>Email:</label>
                                        <input type="text" {if $errors.username}style="border: 1px solid #802420;"{/if} value="{$user.email}" name="username" placeholder="Username">
                                        {if $errors.username}
                                        <div class="form-error">
                                            <span style="">
                                                <ul>
                                                {foreach $errors.username as $error}
                                                    <li>{$error}</li>
                                                {/foreach}
                                                </ul>
                                            </span>
                                        </div>
                                        {/if}
                                    </div>
                                    <div class="field">
                                        <label>Firstname:</label>
                                        <input type="text" {if $errors.username}style="border: 1px solid #802420;"{/if} value="{$user.firstname}" name="username" placeholder="Username">
                                        {if $errors.username}
                                        <div class="form-error">
                                            <span style="">
                                                <ul>
                                                {foreach $errors.username as $error}
                                                    <li>{$error}</li>
                                                {/foreach}
                                                </ul>
                                            </span>
                                        </div>
                                        {/if}
                                    </div>
                                    <div class="field">
                                        <label>Lastname:</label>
                                        <input type="text" {if $errors.username}style="border: 1px solid #802420;"{/if} value="{$user.lastname}" name="username" placeholder="Username">
                                        {if $errors.username}
                                        <div class="form-error">
                                            <span style="">
                                                <ul>
                                                {foreach $errors.username as $error}
                                                    <li>{$error}</li>
                                                {/foreach}
                                                </ul>
                                            </span>
                                        </div>
                                        {/if}
                                    </div>
                                    <div class="field">
                                        <label>Country:</label>
                                        <input type="text" {if $errors.username}style="border: 1px solid #802420;"{/if} value="{$user.username}" name="username" placeholder="Username">
                                        {if $errors.username}
                                        <div class="form-error">
                                            <span style="">
                                                <ul>
                                                {foreach $errors.username as $error}
                                                    <li>{$error}</li>
                                                {/foreach}
                                                </ul>
                                            </span>
                                        </div>
                                        {/if}
                                    </div>
                                    
                                    <div class="field">
                                        <label>About me:</label>
                                        <input type="text" {if $errors.username}style="border: 1px solid #802420;"{/if} value="{$user.username}" name="username" placeholder="Username">
                                        {if $errors.username}
                                        <div class="form-error">
                                            <span style="">
                                                <ul>
                                                {foreach $errors.username as $error}
                                                    <li>{$error}</li>
                                                {/foreach}
                                                </ul>
                                            </span>
                                        </div>
                                        {/if}
                                    </div>
                                    
                                    <h2>PREFERENCES (optional)</h2>
                                    
                                    <div class="field">
                                        <label>Country:</label>
                                        <input type="text" {if $errors.username}style="border: 1px solid #802420;"{/if} value="{$user.username}" name="username" placeholder="Username">
                                        {if $errors.username}
                                        <div class="form-error">
                                            <span style="">
                                                <ul>
                                                {foreach $errors.username as $error}
                                                    <li>{$error}</li>
                                                {/foreach}
                                                </ul>
                                            </span>
                                        </div>
                                        {/if}
                                    </div>
                                    
                                    <div class="field">
                                        <label>Country:</label>
                                        <input type="text" {if $errors.username}style="border: 1px solid #802420;"{/if} value="{$user.username}" name="username" placeholder="Username">
                                        {if $errors.username}
                                        <div class="form-error">
                                            <span style="">
                                                <ul>
                                                {foreach $errors.username as $error}
                                                    <li>{$error}</li>
                                                {/foreach}
                                                </ul>
                                            </span>
                                        </div>
                                        {/if}
                                    </div>
                                    
                                    <div class="field">
                                        <label>Country:</label>
                                        <input type="text" {if $errors.username}style="border: 1px solid #802420;"{/if} value="{$user.username}" name="username" placeholder="Username">
                                        {if $errors.username}
                                        <div class="form-error">
                                            <span style="">
                                                <ul>
                                                {foreach $errors.username as $error}
                                                    <li>{$error}</li>
                                                {/foreach}
                                                </ul>
                                            </span>
                                        </div>
                                        {/if}
                                    </div>
                                    
                                    <br>

                                    <center><input type="submit" value="Save changes" class="button button-big rounded-4-times"></center>
                                    
                                </form>
                                    
                                </div>

                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{/block}