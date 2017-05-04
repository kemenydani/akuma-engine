{if $details.Pages > 1}
    
<center>
<nav>
  <ul class="pagination pagination-sm">
      
    <li class="{if ($details.Current-1 < 1)}disabled{/if}">
        <a href="{if ($details.Current > 1)}{$base}{$url}{$details.Current-1}/{$searchurl}{/if}" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
        </a>
    </li>
    
    {for $i = 0; $i < $details.Pages; $i++}
        <li class="{if ($i+1 == $details.Current)}active{/if}">
            <a href="{$base}{$url}{$i+1}/{$searchurl}">{$i+1} <span class="sr-only">(current)</span></a>
        </li>
    {/for}
    
    <li class="{if $details.Current == $details.Pages}disabled{/if}">
        <a href="{if $details.Current < $details.Pages}{$base}{$url}{$details.Current+1}/{$searchurl}{/if}" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
        </a>
    </li>
    
  </ul>
  <div class="clearfix"></div>
</nav>
</center>
{/if}