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
	<div class="container-fluid">
	{if $teams}

		<div class="module-team-slider">
			<!-- Team slider arrows -->
			<div class="container arrow-holder">
				<div class="control-button prev-team">
					<i class="fa fa-chevron-left" aria-hidden="true"></i>
				</div>
				<div class="control-button next-team">
					<i class="fa fa-chevron-right" aria-hidden="true"></i>
				</div>
			</div>
			<!-- Team list container -->
			<div class="team-list">

				<!-- Loop teams -->
                {foreach $teams as $team}
					<!-- Query database for members in this team -->
					<!-- Check if there are teams -->

						<!-- One team list item -->
						<div class="team-list-item">
							<div class="team-game">
								<img onerror="imgError(this)" src="{$base}Uploads/files/{$team.team_image}">
							</div>
							<div class="players container">
								<!-- Player list container -->
								<div class="player-list">
                                    {foreach $team.members as $member }
										<!-- One palyer list item -->
										<div class="player-list-item">

											<div class="avatar">

                                                {if $member.player_avatar}
													<img onerror="imgError(this)" src="{$base}Uploads/files/{$member.player_avatar}">
                                                {else}
													<img src="{$base}no-image.png">
                                                {/if}

											</div>

											<div class="player-info">
												<h1><a href="">Player name</a></h1>
												<p>{$member.about|truncate:340}</p>
												<div class="social">
													<a href="{$member.facebook}"><i class="fa fa-2x fa-facebook" aria-hidden="true"></i></a>
													<a href="{$member.twitter}"><i class="fa fa-2x fa-twitter" aria-hidden="true"></i></a>
													<a href="{$member.youtube}"><i class="fa fa-2x fa-youtube" aria-hidden="true"></i></a>
												</div>
											</div>

										</div> <!-- .player-list-item -->
                                    {/foreach} <!-- foreach members -->
								</div> <!-- .player-list -->
							</div> <!-- .player-slider -->
						</div> <!-- .team-list-item -->

                {/foreach} <!-- foreach teams -->
			</div> <!-- .team-list -->
		</div> <!-- .team-slider -->

	{else}
	    There are no teams.
	{/if}

    </div>
</section>
{/block}

