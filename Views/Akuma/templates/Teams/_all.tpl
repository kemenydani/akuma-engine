{extends file="Global/_full.tpl"}
{block name=content}
<script type="text/javascript">
	$(document).ready(function(){
		//Slider instance 3
		var options = {
			main: ".module-team-slider",
			container: ".team-list",
			btn_next: ".next-team",
			btn_prev: ".prev-team"
		};
		new contentSlider(options);
	});
</script>
<section id="content">
	<br>
	<div class="container">
	{if $teams}

		<div class="module-team-slider">
			<!-- Team slider arrows -->
			<div class="control-button prev-team">
				<i class="fa fa-chevron-left" aria-hidden="true"></i>
			</div>
			<div class="control-button next-team">
				<i class="fa fa-chevron-right" aria-hidden="true"></i>
			</div>
			<!-- Team list container -->
			<div class="team-list">
				<!-- Loop teams -->
                {foreach $teams as $team}
					<!-- Query database for members in this team -->
                    {assign var="members" value=$Member->find(["active = 1", "team_id = `$team.team_id`"])}
					<!-- Check if there are teams -->
                    {if count($members)}
						<!-- One team list item -->
						<div class="team-list-item">
							<div class="team-game">
								<img src="{$base}Uploads/files/{$team.team_image}">
							</div>
							<div class="players">
								<!-- Player list container -->
								<div class="player-list">
                                    {foreach $members as $member}
										<!-- One palyer list item -->
										<div class="player-list-item">
											<div class="avatar">
                                                {if $member.player_avatar}
													<img onerror="imgError(this)" src="{$base}Uploads/files/{$member.player_avatar}">
                                                {else}
													<img src="{$base}no-image.png">
                                                {/if}
											</div>
											<p>{$member.about|truncate:280}</p>
											<br>
											<a href="{$base}user/profile/{$member.user_id}/">
												<button type="button" class="button button-brand-border button-medium button-rounded">READ MORE</button>
											</a>
											<br>
											<div class="social">
												<a href="{$member.facebook}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
												<a href="{$member.twitter}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
												<a href="{$member.youtube}"><i class="fa fa-youtube" aria-hidden="true"></i></a>
											</div>
										</div> <!-- .player-list-item -->
                                    {/foreach} <!-- foreach members -->
								</div> <!-- .player-list -->
							</div> <!-- .player-slider -->
						</div> <!-- .team-list-item -->
                    {/if} <!-- if members count -->
                {/foreach} <!-- foreach teams -->
			</div> <!-- .team-list -->

		</div> <!-- .team-slider -->

	{else}
	    There are no teams.
	{/if}

    </div>
</section>
{/block}

