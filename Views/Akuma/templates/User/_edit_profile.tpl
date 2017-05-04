{extends file="Global/_full.tpl"}

{block name=content}

<section id="content">
	<br>
	<h1 class="heading">EDIT MY PROFILE</h1>
	<div class="container">
	<br>

{if $user}

    {if !isset($success)}

	<form method="POST" class="form-cust" action="{$base}user/editprofile/">

	    <div class="field display-flex flex-flow-col">
			<div>
				<a href="{$base}user/changepw/{$user.user_id}/"><button class="button button-dark button-big"  type="button">Change password</button></a>
			</div>
	    </div>
	    
	    <div class="field display-flex flex-flow-col">
			<label class="heading heading-small">Email:</label>
			<input class="flex-1" type="email" name="email" value="{$user.email}" placeholder="Email address">
			{if $errors.email}
				<ul class="msg error">
				{foreach $errors.email as $error}
				<li>{$error}</li>
				{/foreach}
				</ul>
			{/if}
	    </div>
	    
		<div class="field display-flex flex-flow-col">
			<label class="heading heading-small">Firstname:</label>
			<input class="flex-1" type="text" name="firstname" value="{$user.firstname}" placeholder="Firstname">
			{if $errors.firstname}
				<ul class="msg error">
				{foreach $errors.firstname as $error}
				<li>{$error}</li>
				{/foreach}
				</ul>
			{/if}
	    </div>
	    
	    <div class="field display-flex flex-flow-col">
			<label class="heading heading-small">Lastname:</label>
			<input class="flex-1" type="text" name="lastname" value="{$user.lastname}" placeholder="Lastname">
			{if $errors.lastname}
				<ul class="msg error">
				{foreach $errors.lastname as $error}
				<li>{$error}</li>
				{/foreach}
				</ul>
			{/if}
	    </div>
	    
	    <div class="field">

			<div class="flex-pad-container">
				<div class="flex-1 display-flex flex-flow-col">
					<label class="heading heading-small">Country:</label>
					<select name="country">

					{foreach $countries as $country_key => $country_value}

						{if $user.country == $country_key}
						<option selected="selected" value="{$country_key}">{$country_value}</option>
						{else}
						<option value="{$country_key}">{$country_value}</option>
						{/if}

					{/foreach}
					</select>
					{if $errors.country}
					<ul class="msg error flex-1">
					{foreach $errors.country as $error}
						<li>{$error}</li>
					{/foreach}
					</ul>
					{/if}
				</div>

				<div class="flex-1 display-flex flex-flow-col">
					<label class="heading heading-small">Town:</label>
					<input type="text" value="{$user.city}" name="city" placeholder="City">
					{if $errors.city}
					<ul class="msg error flex-1">
					{foreach $errors.city as $error}
						<li>{$error}</li>
					{/foreach}
					</ul>
					{/if}
				</div>
			</div>

	    </div>
	    
	    <div class="field display-flex flex-flow-col">
			<label class="heading heading-small">Bio:</label>
			<textarea class="medium" name="bio">{$user.bio}</textarea>

			{if $errors.bio}
				<ul class="msg error">
				{foreach $errors.bio as $error}
				<li>{$error}</li>
				{/foreach}
				</ul>
			{/if}
	    </div>
	    
		<center><button class="button button-dark button-big"  type="submit">Edit Profile</button></center>
	    <br>
		<br>
    </form>
	
{else}   
    <div class="msg success" >Succesfully updated your profile.</div>
{/if}

{else}
    <div class="msg error" >You do not have permission to do that right now! Please log in to edit your profile.</div>
{/if}

	</div>
</section>

{/block}