<?php
/* Smarty version 3.1.30, created on 2017-04-19 07:32:27
  from "E:\_PROJECTS\_WAMP_ROOT\akuma\Views\Akuma\templates\Global\_home_about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f7128b0ba028_91322843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b82b8eb7d791710c56e12633cb742015be75cde9' => 
    array (
      0 => 'E:\\_PROJECTS\\_WAMP_ROOT\\akuma\\Views\\Akuma\\templates\\Global\\_home_about.tpl',
      1 => 1489342002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f7128b0ba028_91322843 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\_PROJECTS\\_WAMP_ROOT\\akuma\\Core\\Assets\\Smarty\\plugins\\modifier.truncate.php';
?>
<section id="about">
    
    <div class="container">
	
	<h1 class="headline-rounded headline-dark headline-big">TEAM AKUMA</h1>

	<?php $_smarty_tpl->_assignInScope('about_info', $_smarty_tpl->tpl_vars['About']->value->find(array(),1));
?>
	
	<p class="big-text">
	    <?php if ($_smarty_tpl->tpl_vars['about_info']->value) {
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['about_info']->value['about_short'],380);
}?>
	</p>

	<a href="">
	    <button type="button" class="button button-dark button-big">FACEBOOK</button>
	</a>
	
    </div> <!-- .container -->
	
</section> <!-- .#about --><?php }
}
