<?php
/* Smarty version 3.1.30, created on 2017-04-29 07:48:58
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Global\_footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5904456a49c730_24735861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06598149880769d2159ff48a9395dcfab40797f2' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Global\\_footer.tpl',
      1 => 1489386972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5904456a49c730_24735861 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Core\\Assets\\Smarty\\plugins\\modifier.truncate.php';
?>
<footer id="footer">
    
    <div class="container-fluid bg-dark-80">
	
	<div class="container">
	    
	    <div class="navigation">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
">HOME</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
about">ABOUT</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
teams">TEAM</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
partners">PARTNERS</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
downloads">DOWNLOADS</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
forum">BOARD</a>
	    </div>
	    
	</div> <!-- .container end -->
	    
    </div> <!-- .container-fluid end -->
	    
    <div class="container-fluid">
	
	<div class="container">
	    
	    <div class="about">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
">
		    <img src="<?php echo $_smarty_tpl->tpl_vars['includes']->value;?>
images/header-logo.png" alt=""/>
		</a>
		<h1>TEAM AKUMA</h1>
		<?php $_smarty_tpl->_assignInScope('about_info', $_smarty_tpl->tpl_vars['About']->value->find(array(),1));
?>
		<p><?php if ($_smarty_tpl->tpl_vars['about_info']->value) {
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['about_info']->value['about_short'],250);
}?></p>
	    </div>
	    
	</div> <!-- .container end -->
	    
    </div> <!-- .container-fluid end -->
	    
    <div class="container-fluid info-bar bg-dark">
	
	<div class="container">
	    
	    <div class="copyright">
		COPYRIGHTS © 2016 BY&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
">TEAM AKUMA</a>
	    </div>
	    
	    <div class="social-media">
		
		<a href="" class="icon icon-circular">
		    <i class="fa fa-facebook" aria-hidden="true"></i>
		</a>
		<a href="" class="icon icon-circular">
		    <i class="fa fa-twitter" aria-hidden="true"></i>
		</a>
		<a href="" class="icon icon-circular">
		    <i class="fa fa-youtube" aria-hidden="true"></i>
		</a>
		<a href="" class="icon icon-circular">
		    <i class="fa fa-twitch" aria-hidden="true"></i>
		</a>
		
	    </div> <!-- .social-media end -->
	    
	</div> <!-- .container end -->
	    
    </div> <!-- .container-fluid end -->
	    
</footer> <!-- #footer end --><?php }
}
