{extends file="Global/_full.tpl"}

{block name=content}
<section id="content">
    <br>
    <h1 class="heading">CHANGE PASSWORD</h1>
    <div class="container">
    <br>


    {if $user}

    {if !isset($success)}

    <form class="form-cust" method="POST" action="{$base}user/changepw/{$user.user_id}/">

        <div class="field display-flex flex-flow-col">
            <label class="heading heading-small">Current password:</label>
            <input type="text" name="password" placeholder="Current password">
            {if $errors.password}

                    <ul class="msg error">
                    {foreach $errors.password as $error}
                        <li>{$error}</li>
                    {/foreach}
                    </ul>

            {/if}
        </div>

        <div class="field display-flex flex-flow-col">
            <label class="heading heading-small">New password:</label>
            <input type="text" name="password_new" placeholder="New password">
            {if $errors.password_new}

                    <ul class="msg error">
                    {foreach $errors.password_new as $error}
                        <li>{$error}</li>
                    {/foreach}
                    </ul>

            {/if}
        </div>

        <div class="field display-flex flex-flow-col">
            <label class="heading heading-small">New password again:</label>
            <input type="text" name="password_new_again" placeholder="New password again">
            {if $errors.password_new_again}

                    <ul class="msg error">
                    {foreach $errors.password_new_again as $error}
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

        <center><button class="button button-dark button-medium" type="submit">Change password</button></center>
        <br>
        <br>
    </form>

    {else}
    <div class="msg success">Your password has been changed.</div>
    {/if}

    {else}
        <div class="msg error" >You dont have permission for that.</div>
    {/if}

    </div>
</section>

{/block}