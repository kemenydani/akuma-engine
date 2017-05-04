{extends file="Global/_full.tpl"}

{if $error}
    <div class="alert alert-info">{$error}</div>
{/if}

{block name=content} 

<section id="content">
    <div class="container">
    <br>
    <h1 class="heading">PASSWORD RECOVERY</h1>

    {if !$user}

    {if !isset($success)}

    <form class="form-cust" method="POST" action="{$base}user/recover">
        <div class="field display-flex flex-flow-col">
            <label class="heading heading-small">Registered email:</label>
            <input type="email" value="{$data.email}" name="email" placeholder="Email address">
            {if $errors.email}
            <ul class="msg error">
            {foreach $errors.email as $error}
                <li>{$error}</li>
            {/foreach}
            </ul>
            {/if}
        </div>
        <div class="field display-flex flex-flow-col">
            <label class="heading heading-small">New password:</label>
            <input type="text" name="password" placeholder="Password">
            {if $errors.password}
            <ul class="msg error">
            {foreach $errors.password as $error}
                <li>{$error}</li>
            {/foreach}
            </ul>
            {/if}
        </div>
        <div class="field display-flex flex-flow-col">
            <label class="heading heading-small">New password again:</label>
            <input type="text" name="password_again" placeholder="Password again">
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
        <center><button class="button button-dark button-medium" type="submit">Start recovery</button></center>
    </form>

    {else}
        <div class="msg success">An verification email has been sent to your email inbox. Open the email and click verify if you want to change your password.!</div>
    {/if}

    {else}
        <div class="msg info" >You can't start a password recovery process while you are logged in.</div>
    {/if}
    </div>
    <br>
</section>

{/block}