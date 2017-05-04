<?php
/* Smarty version 3.1.30, created on 2017-04-19 07:32:27
  from "E:\_PROJECTS\_WAMP_ROOT\akuma\Views\Akuma\templates\Global\_home_teams.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f7128b42a6c3_78518062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a7d8306784e496ac4c3e308d8ea8385daf8aef6' => 
    array (
      0 => 'E:\\_PROJECTS\\_WAMP_ROOT\\akuma\\Views\\Akuma\\templates\\Global\\_home_teams.tpl',
      1 => 1489346290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f7128b42a6c3_78518062 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="teams">
    
    <div class="container">
	
    <h1>OUR PRO TEAMS</h1>
    
    <?php $_smarty_tpl->_assignInScope('teams', $_smarty_tpl->tpl_vars['Team']->value->find(array('active = 1','type = "game"')));
?>

    <?php if (count($_smarty_tpl->tpl_vars['teams']->value)) {?>
	
	<div class="team-slider">
	    
	    <div class="control-button prev-team">
		<i class="fa fa-chevron-left" aria-hidden="true"></i>
	    </div>

	    <div class="control-button next-team">
		<i class="fa fa-chevron-right" aria-hidden="true"></i>
	    </div>

	    <div class="team-list">
	
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
?>
	    
		<?php $_smarty_tpl->_assignInScope('members', $_smarty_tpl->tpl_vars['Member']->value->find(array("active = 1","team_id = ".((string)$_smarty_tpl->tpl_vars['team']->value['team_id']))));
?>
	    
		<?php if (count($_smarty_tpl->tpl_vars['members']->value)) {?>

		<div class="team-list-item">
			
		    <div class="team-game">
		       <img src="http://vignette1.wikia.nocookie.net/logopedia/images/b/bc/Counter-Strike_Global_Offensive.png/revision/latest?cb=20150828062514">
		    </div>
			
		    <div class="player-slider">
			    
			<div class="control-button prev-player">
			    <i class="fa fa-chevron-left" aria-hidden="true"></i>
			</div>

			<div class="control-button next-player">
			    <i class="fa fa-chevron-right" aria-hidden="true"></i>
			</div>
			    
			<div class="player-list">
				
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['members']->value, 'member');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['member']->value) {
?>
				
			    <div class="player-list-item">

				<div class="avatar">
				    <?php if ($_smarty_tpl->tpl_vars['member']->value['player_avatar']) {?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
Uploads/files/<?php echo $_smarty_tpl->tpl_vars['member']->value['player_avatar'];?>
">
				    <?php } else { ?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
no-image.png">
				    <?php }?>
				</div>

				<p><?php echo $_smarty_tpl->tpl_vars['member']->value['about'];?>
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
			
		</div> <!-- .player-list-item -->

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
