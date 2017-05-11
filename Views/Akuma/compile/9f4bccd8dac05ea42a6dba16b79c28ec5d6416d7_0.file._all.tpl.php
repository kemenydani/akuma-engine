<?php
/* Smarty version 3.1.30, created on 2017-05-11 13:04:30
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Teams\_all.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5914615e1926a7_44814484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f4bccd8dac05ea42a6dba16b79c28ec5d6416d7' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Teams\\_all.tpl',
      1 => 1494507867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Global/_full.tpl' => 1,
  ),
),false)) {
function content_5914615e1926a7_44814484 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Core\\Assets\\Smarty\\plugins\\modifier.truncate.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_245395914615e190b98_71255815', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Global/_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_245395914615e190b98_71255815 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript">
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
<?php echo '</script'; ?>
>
<section id="content">
	<br>
	<h1 class="heading">TEAMS</h1>
	<div class="container">
	<?php if ($_smarty_tpl->tpl_vars['teams']->value) {?>

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
								<img src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
Uploads/files/<?php echo $_smarty_tpl->tpl_vars['team']->value['team_image'];?>
">
							</div>
							<div class="players">
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

	<?php } else { ?>
	    There are no teams.
	<?php }?>

    </div>
</section>
<?php
}
}
/* {/block 'content'} */
}
