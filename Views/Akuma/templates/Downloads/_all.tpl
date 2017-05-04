{extends file="Global/_full.tpl"}
{block name=content}
<section id="content">
    <br>
    <br>
    <h1 class="heading">DOWNLOADS</h1>
    <br>
    <div class="container files-container">

        <div id="login" class="login-area">
            <form id="login-form" action="{$base}downloads/" method="GET">
                {assign var="categories" value=$Categories->find()}
                <div id="login-form-inputs">
                    <select name="category">
                        <option disabled="disabled" selected="selected">Select a category</option>
                        {foreach $categories as $category}
                            <option {if $category_id && $category_id == $category['category_id']}selected="selected"{/if} value="{$category['category_id']}">{$category['category_name']}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="">
                    <button class="button button-dark button-medium" type="submit">Filter <i class="fa fa-filter"></i></button>
                    <button class="button button-dark button-medium" onclick="window.location.href='{$base}downloads/'" type="button">Reset <i class="fa fa-refresh"></i></button>
                </div>
            </form>
        </div>
        <br>

        {if $files}
        <div class="file-list">
        {foreach $files as $file}
            <div class="file-list-item">
                <a href="{$base}downloads/download/{$file.download_id}/"><h2><i class="logout fa fa-download fa-1x" aria-hidden="true"></i> {$file.download_name}</h2></a>
                {assign var="category" value=$Categories->find(["category_id = `$file.category`"], 1)}
                <i class="logout fa fa-bar-chart fa-1x" aria-hidden="true"></i>Downloaded {$file.download_count} times <i class="fa fa-filter"></i> {$category.category_name} - <i class="logout fa fa-file fa-1x" aria-hidden="true"></i> {$file.size}
                <br>
                <p>{$file.download_desc|truncate:200}</p>
            </div>
        {/foreach}
        </div>
        {else}
        <br>
        <center>There are no files at the moment.</center>
        <br>
        <br>
        {/if}
        {assign var="searchurl" value=""}
        {if $category_id}
            {$searchurl = "?category=`$category_id`"}
        {/if}
        {include file="Global/page.tpl" url='downloads/all/' searchurl=$searchurl total=$total pages=$pages current=$current}
        <br>
    </div>
</section>
{/block}