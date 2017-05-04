{extends file="Global/_full.tpl"} 

{block name=content}
<section id="content">
	<br>
	<h1 class="heading">NEW USER REGISTRATION</h1>

	<div class="container">
    {if !isset($success)}

	{if !$user}
		<form method="POST" class="form-cust" action="{$base}user/register">

		    <div class="field display-flex flex-flow-col">
			<label class="heading heading-small">Username:</label>
			<input class="flex-1" type="text" name="username" placeholder="Username">
			{if $errors.username}
			    <ul class="msg error">
			    {foreach $errors.username as $error}
				<li>{$error}</li>
			    {/foreach}
			    </ul>
			{/if}
		    </div>

		    <div class="field display-flex flex-flow-col">
			<label class="heading heading-small">Email:</label>
			<input class="flex-1" type="email" name="email" placeholder="Email address">
			{if $errors.email}
			    <ul class="msg error">
			    {foreach $errors.email as $error}
				<li>{$error}</li>
			    {/foreach}
			    </ul>
			{/if}
		    </div>

		    <div class="field display-flex flex-flow-col">
			<label class="heading heading-small">Password:</label>
			<input class="flex-1" type="password" name="password" placeholder="Password">
			{if $errors.password}
			    <ul class="msg error">
			    {foreach $errors.password as $error}
				<li>{$error}</li>
			    {/foreach}
			    </ul>
			{/if}
		    </div>

		    <div class="field display-flex flex-flow-col">

			<label class="heading heading-small">Password again:</label>
			<input class="flex-1" type="password" name="password_again" placeholder="Password again">

			{if $errors.password_again}
			    <ul class="msg error">
			    {foreach $errors.password_again as $error}
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
			<br>
		    <center><button class="button button-dark button-big" type="submit">Register</button></center>
			<br>
	</form>
	{else} 
	    You can't register a new user while you are logged in.
	{/if} 


    {else}   
		Welcome on board! You have succesfully registered on Venko Gaming. Now you can log in!
    {/if}

</div>
</section>
{/block}