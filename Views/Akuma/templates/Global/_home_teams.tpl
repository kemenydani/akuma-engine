<section id="teams">
    <div class="container">
		<!-- Title -->
    	<h1>OUR PRO TEAMS</h1>
		<!-- Database query -->
    	{assign var="teams" value=$Team->find(['active = 1', 'type = "game"'])}
		<!-- Check if query returned with something -->
    	{if count($teams)}
			<div class="team-slider">
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
							   <img src="http://vignette1.wikia.nocookie.net/logopedia/images/b/bc/Counter-Strike_Global_Offensive.png/revision/latest?cb=20150828062514">
							</div>
		    				<div class="player-slider" id="team_{$team.team_id}_palyer_slider">
								<!-- Player slider arrows -->
								<div class="control-button prev-player">
									<i class="fa fa-chevron-left" aria-hidden="true"></i>
								</div>
								<div class="control-button next-player">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</div>
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
							<script>

									new contentSlider({
										main: "#team_{$team.team_id}_palyer_slider",
										container: ".player-list",
										btn_next: ".next-player",
										btn_prev: ".prev-player",
										debug: true
									});

							</script>
						</div> <!-- .team-list-item -->
						{/if} <!-- if members count -->
					{/foreach} <!-- foreach teams -->
	    		</div> <!-- .team-list -->
	    
			</div> <!-- .team-slider -->
    	{/if} <!-- if teams count -->
    </div> <!-- .container -->
</section> <!-- #teams -->