{extends file="Global/index.tpl"}
{block name=index}
<style>

#contentColumns { /* Masonry container */
    -moz-column-count: 3 !important;
    -webkit-column-count: 3 !important;
    column-count: 3 !important;
    -moz-column-gap: 1em;
    -webkit-column-gap: 1em;
    column-gap: 1em;
}
@media only screen and (min-width: 0px) and (max-width: 992px){
    #contentColumns {
        -moz-column-count: 2 !important;
        -webkit-column-count: 2 !important;
        column-count: 2 !important;
    }
}

@media only screen and (min-width: 0px) and (max-width: 768px){
    #contentColumns {
        -moz-column-count: 1 !important;
        -webkit-column-count: 1 !important;
        column-count: 1 !important;
    }
}

</style>

<div class="container" style="">
    <div id="contentColumns">
        {block name=content}{$content}{/block}
    </div>
</div>
    
<div class="container">
    {block name=error}{/block}  
</div>   

<div class="container">
    {block name=pagination}{/block}  
</div>
{/block}
