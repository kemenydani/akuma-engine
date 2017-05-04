{if $pages > 1}

<div class="container pagination-container">

    <ul class="pagination">

        <li class="{if ($current-1 < 1)}disabled{/if}">
            <a href="{if ($current > 1)}{$base}{$url}{$current-1}/{$searchurl}{/if}" aria-label="Previous">prev</a>
        </li>

        {for $i = 0; $i < $pages; $i++}
        <li class="{if ($i+1 == $current)}active{/if}">
            <a href="{$base}{$url}{$i+1}/{$searchurl}">{$i+1}</a>
        </li>
        {/for}

        <li class="{if $current == $pages}disabled{/if}">
            <a href="{if $current < $pages}{$base}{$url}{$current+1}/{$searchurl}{/if}" aria-label="Next">next</a>
        </li>

    </ul>

    <div class="clearfix"></div>

</div>

{/if}