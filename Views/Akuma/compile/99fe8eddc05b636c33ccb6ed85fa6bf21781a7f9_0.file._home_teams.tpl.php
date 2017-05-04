<?php
/* Smarty version 3.1.30, created on 2017-05-01 15:25:34
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Global\_home_teams.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5907536e99d076_45838221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99fe8eddc05b636c33ccb6ed85fa6bf21781a7f9' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Global\\_home_teams.tpl',
      1 => 1493647795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5907536e99d076_45838221 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Core\\Assets\\Smarty\\plugins\\modifier.truncate.php';
?>
<section id="teams">
    <div class="container">
		<!-- Title -->
    	<h1>OUR PRO TEAMS</h1>
		<!-- Database query -->
    	<?php $_smarty_tpl->_assignInScope('teams', $_smarty_tpl->tpl_vars['Team']->value->find(array('active = 1','type = "game"')));
?>
		<!-- Check if query returned with something -->
    	<?php if (count($_smarty_tpl->tpl_vars['teams']->value)) {?>
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
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
?>
	    				<!-- Query database for members in this team -->
						<?php $_smarty_tpl->_assignInScope('members', $_smarty_tpl->tpl_vars['Member']->value->find(array("active = 1","team_id = ".((string)$_smarty_tpl->tpl_vars['team']->value['team_id']))));
?>
	    				<!-- Check if there are teams -->
						<?php if (count($_smarty_tpl->tpl_vars['members']->value)) {?>
						<!-- One team list item -->
						<div class="team-list-item">
							<div class="team-game">
							   <img src="http://vignette1.wikia.nocookie.net/logopedia/images/b/bc/Counter-Strike_Global_Offensive.png/revision/latest?cb=20150828062514">
							</div>
		    				<div class="player-slider" id="team_<?php echo $_smarty_tpl->tpl_vars['team']->value['team_id'];?>
_palyer_slider">
								<!-- Player slider arrows -->
								<div class="control-button prev-player">
									<i class="fa fa-chevron-left" aria-hidden="true"></i>
								</div>
								<div class="control-button next-player">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</div>
								<!-- Player list container -->
								<div class="player-list">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['members']->value, 'member');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['member']->value) {
?>
										<!-- One palyer list item -->
										<div class="player-list-item">
											<div class="avatar">
												<?php if ($_smarty_tpl->tpl_vars['member']->value['player_avatar']) {?>
												<img onerror="imgError(this)" src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
Uploads/files/<?php echo $_smarty_tpl->tpl_vars['member']->value['player_avatar'];?>
">
												<?php } else { ?>
												<img src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
no-image.png">
												<?php }?>
											</div>
											<p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['member']->value['about'],280);?>
</p>
											<br>
											<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
user/profile/<?php echo $_smarty_tpl->tpl_vars['member']->value['user_id'];?>
/">
												<button type="button" class="button button-brand-border button-medium button-rounded">READ MORE</button>
											</a>
											<br>
											<div class="social">
												<a href="<?php echo $_smarty_tpl->tpl_vars['member']->value['facebook'];?>
"><i class="fa fa-facebook" aria-hidden="true"></i></a>
												<a href="<?php echo $_smarty_tpl->tpl_vars['member']->value['twitter'];?>
"><i class="fa fa-twitter" aria-hidden="true"></i></a>
												<a href="<?php echo $_smarty_tpl->tpl_vars['member']->value['youtube'];?>
"><i class="fa fa-youtube" aria-hidden="true"></i></a>
											</div>
										</div> <!-- .player-list-item -->
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 <!-- foreach members -->
								</div> <!-- .player-list -->
							</div> <!-- .player-slider -->
							<?php echo '<script'; ?>
>

									new contentSlider({
										main: "#team_<?php echo $_smarty_tpl->tpl_vars['team']->value['team_id'];?>
_palyer_slider",
										container: ".player-list",
										btn_next: ".next-player",
										btn_prev: ".prev-player",
										debug: true
									});

							<?php echo '</script'; ?>
>
						</div> <!-- .team-list-item -->
						<?php }?> <!-- if members count -->
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 <!-- foreach teams -->
	    		</div> <!-- .team-list -->
	    
			</div> <!-- .team-slider -->
    	<?php }?> <!-- if teams count -->
    </div> <!-- .container -->
</section> <!-- #teams --><?php }
}
