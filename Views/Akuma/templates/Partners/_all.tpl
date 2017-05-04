{extends file="Global/_full.tpl"} 

{block name=content}

    <section id="content" class="content-dark-themed">

        <div class="container">

        <br>

        <h1 class="heading">SPONSORS</h1>

        <br>

        {if $sponsors}

            {foreach $sponsors as $sponsor}
            <div class="container panel panel-dark margin-bottom-2x partner-list-item" style="position: relative;>">

                <div class="partner-list-item-content">
                    <a href="{$sponsor.partner_url}">
                        <img onerror="imgError(this);" src="{$base}source/{$sponsor.partner_img}">
                    </a>
                    <h2>
                        <a href="{$sponsor.partner_url}">{$sponsor.partner_name}</a>
                    </h2>
                    <p>
                        {$sponsor.description}
                    </p>
                </div>

                <a href="{$sponsor.partner_url}">
                    <button class="button button-rounded button-medium button-brand" type="button">Visit website</button>
                </a>
            </div>
            {/foreach}

        {else}
            There are no sponsors.
        {/if}

        </div>

    </section>

{/block}