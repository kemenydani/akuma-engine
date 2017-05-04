{extends file="Global/_full.tpl"}
{block name=content} 
    
    <h1 class="heading">CONTACT</h1>  
    {if !isset($success)}
    <form method="POST" class="form-cust" action="{$base}contact/send/">

	<div class="field">

	   <div class="flex-pad-container">
	       
	       <div class="flex-1 display-flex flex-flow-col">
		   <label class="heading heading-small">Your name:</label>
		   <input type="text" name="sender_name" placeholder="Full name">
		    {if $errors.sender_name}
			<ul class="msg error flex-1">
			{foreach $errors.sender_name as $error}
			    <li>{$error}</li>
			{/foreach}
			</ul>
		    {/if}
	       </div>
	       <div class="flex-1 display-flex flex-flow-col">
		   <label class="heading heading-small">Your email:</label>
		   <input type="email" name="sender_email" placeholder="Email">
		    {if $errors.sender_email}
			<ul class="msg error flex-1">
			{foreach $errors.sender_email as $error}
			    <li>{$error}</li>
			{/foreach}
			</ul>
		    {/if}
	       </div>
	       
	   </div>
       </div>
	
	<div class="field">

	    <div class="flex-pad-container">
		<div class="flex-1 display-flex flex-flow-col">
		    <label class="heading heading-small">Subject:</label>
		    <input type="text" value="{$data.subject}" name="subject" placeholder="Subject">
		    {if $errors.subject}
			<ul class="msg error flex-1">
			{foreach $errors.subject as $error}
			    <li>{$error}</li>
			{/foreach}
			</ul>
		    {/if}
		</div>
		    
		<div class="flex-1 display-flex flex-flow-col">
		    <label class="heading heading-small">Recipient:</label>
		    <select name="recipient">
			{foreach $contacts as $contact}
			    <option value="{$contact.user_id}">{$contact.contact_name}</option>
			{/foreach}
		    </select>
		    {if $errors.recipient}
			<ul class="msg error flex-1">
			{foreach $errors.recipient as $error}
			    <li>{$error}</li>
			{/foreach}
			</ul>
		    {/if}
		</div>
	    </div>

	</div>
	
	
	<div class="field display-flex flex-flow-col">
	    <label class="heading heading-small">Your message:</label>
	    <textarea class="medium" name="message">{$data.message}</textarea>
	    {if $errors.message}
		<ul class="msg error flex-1">
		{foreach $errors.message as $error}
		    <li>{$error}</li>
		{/foreach}
		</ul>
	    {/if}
	</div>

	<div class="field display-flex flex-flow-col">
	    <label class="heading heading-small">Security Captcha:</label>
	    {assign var=cfg value=$Settings->find(['variable_name = "capcha_site_key"'], 1)}
	    
	    <div class="g-recaptcha" data-sitekey="{$cfg.setting_value}"></div>
	    {if $errors.recaptcha}
		<ul class="msg error">
		    {foreach $errors.recaptcha as $error}
			<li>{$error}</li>
		    {/foreach}
		</ul>
	    {/if}
	</div>
	
	
	<hr>
	<button>Send message</button>
        
    </form>
	    
{else}   
    <div class="msg success" >Your message has been sent!</div>
{/if}
{/block}