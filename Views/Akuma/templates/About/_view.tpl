{extends file="Global/_full.tpl"} 

{block name=content}

<section id="content">

    <br>

    <h1 class="heading">ABOUT US</h1>

    <div class="container">


        {if $about}
        <p>{$about.about_long}</p>
        {else}
        There is no about text yet.
        {/if}

        <br>
    </div>

</section>

{/block}