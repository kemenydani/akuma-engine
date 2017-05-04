{if $matches}
    
    <ul class="ul-list">
	{foreach $matches as $match}
	    <li>
	{*	
	    {assign var=score value=json_decode($match.score, true)}

	    {team team_id=$match.home_team_id} vs. {$match.enemy_name}
	    
	    <span class="pull-right">
	    {if $score.home_score > $score.enemy_score}
		{$score.home_score} - {$score.enemy_score}
	    {else if ($score.home_score < $score.enemy_score)}
		{$score.home_score} - {$score.enemy_score}
	    {else}  
		{$score.home_score} - {$score.enemy_score}
	    {/if}
	    </span>

	    </li>
	*}
	
	{assign var=maps value=json_decode($match.map, true)}
	{assign var=home_score value=0}
	{assign var=enemy_score value=0}
	
	{foreach $maps as $map}
	    {if is_numeric($map['home_score'])}
		{$home_score = $home_score + $map['home_score']}
	    {/if}
	    {if is_numeric($map['enemy_score'])}
		{$enemy_score = $enemy_score + $map['enemy_score']}
	    {/if}
	{/foreach}
	
	<li>
	{team team_id=$match.home_team_id} vs. {$match.enemy_name}
	<span class="pull-right">
	{if $home_score > $enemy_score}
	    {$home_score} - {$enemy_score}
	{else if ($home_score < $enemy_score)}
	    {$home_score} - {$enemy_score}
	{else}  
	    {$home_score} - {$enemy_score}
	{/if}
	</span>

	</li>
	
	{/foreach}
    </ul>
 
{else}
     <div class="msg info">This team hasn't played any matches yet.</div>
{/if}