
{foreach $items as $content_item}
    {if ($content_item.sponsor_featured == 0 || !$content_item.sponsor_featured)}

          
    {if $content_item.type == "news"}

    {/if}

    {if $content_item.type == "blog"}

    {/if}

    {/if}
{foreachelse}
There are no news to show.
{/foreach}

