<?php
/* Smarty version 3.1.30, created on 2017-05-01 11:42:45
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Admin\_navigation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59071f3580dca4_16558416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f531c2a2cf10b624fbe7142305cf1df70c6bb070' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Admin\\_navigation.tpl',
      1 => 1493638964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59071f3580dca4_16558416 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_user')) require_once 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Core\\Assets\\Smarty\\plugins\\function.user.php';
?>
<nav id="admin_navbar" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
	<div class="navbar-header">
	    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	    </button>
	    <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
admin/">ADMIN PANEL</a>
	</div>
	<div id="navbar" class="navbar-collapse collapse">
	    <ul class="nav navbar-nav">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
				<ul class="dropdown-menu">
				<?php if ($_smarty_tpl->tpl_vars['user']->value['level'] == 10) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
settings/admin/">Variables</a></li><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['user']->value['level'] == 10) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
categories/admin/">Categories</a></li><?php }?>
				
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Media <span class="caret"></span></a>
				<ul class="dropdown-menu">
				<?php if ($_smarty_tpl->tpl_vars['user']->value['level'] == 8 || $_smarty_tpl->tpl_vars['user']->value['level'] == 10 || $_smarty_tpl->tpl_vars['user']->value['level'] == 9) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
news/admin/">News</a></li><?php }?>
				
				<?php if ($_smarty_tpl->tpl_vars['user']->value['level'] == 10) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
gallery/admin/">Gallery</a></li><?php }?>
				
				
				<?php if ($_smarty_tpl->tpl_vars['user']->value['level'] == 10) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
video/admin/">Videos</a></li><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['user']->value['level'] == 10) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
filemanager/admin/">Filemanager</a></li><?php }?>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Team <span class="caret"></span></a>
				<ul class="dropdown-menu">
				<?php if ($_smarty_tpl->tpl_vars['user']->value['level'] == 10) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
teams/admin/">Teams</a></li><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['user']->value['level'] == 10) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
members/admin/">Members</a></li><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['user']->value['level'] == 6 || $_smarty_tpl->tpl_vars['user']->value['level'] == 10 || $_smarty_tpl->tpl_vars['user']->value['level'] == 9) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
matches/admin/">Matches</a></li><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['user']->value['level'] == 10) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
awards/admin/">Awards</a></li><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['user']->value['level'] == 10) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
about/admin/">About</a></li><?php }?>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Community <span class="caret"></span></a>
				<ul class="dropdown-menu">
				<?php if ($_smarty_tpl->tpl_vars['user']->value['level'] == 10) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
comment/admin/">Comments</a></li><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['user']->value['level'] == 10) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
user/admin/">Users</a></li><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['user']->value['level'] == 10) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
partners/admin/">Sponsors</a></li><?php }?>
				
				
				</ul>
			</li>
	    </ul>
		<p style="margin-right: 0px;" class="navbar-text navbar-right"><b>Signed in as <a href="#" class="navbar-link"><?php echo smarty_function_user(array('user_id'=>$_smarty_tpl->tpl_vars['user']->value['user_id']),$_smarty_tpl);?>
</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
user/logout/"><i class="glyphicon glyphicon-off"></i> Logout</a></b></p>
	</div><!--/.nav-collapse -->
    </div>
</nav><?php }
}
