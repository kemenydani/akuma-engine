<?php
/* Smarty version 3.1.30, created on 2017-04-29 07:48:58
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Global\_home_media.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5904456a46fe37_69327395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f9b722ba9f8aa1179e4882630251f028c421741' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Global\\_home_media.tpl',
      1 => 1489351660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5904456a46fe37_69327395 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Core\\Assets\\Smarty\\plugins\\modifier.truncate.php';
?>
<section id="media">
		    
    <div class="container">
	<h1 class="headline-rounded headline-dark headline-big">MEDIA</h1>

	<p class="big-text">
	   Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
	</p>
    </div>

    <?php $_smarty_tpl->_assignInScope('media_items', $_smarty_tpl->tpl_vars['Video']->value->find(array('active = 1'),10));
?>
    
    <div class="media-content container-fluid">
	
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['media_items']->value, 'media_item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['media_item']->value) {
?>
	    
	<?php $_smarty_tpl->_assignInScope('thumbnails', json_decode($_smarty_tpl->tpl_vars['media_item']->value['thumbnails'],true));
?>
	
	<div class="media-item item-album">
	    
	    <div class="overlay">
		
		<div class="content">
		    <h5><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['media_item']->value['video_title'],28);?>
</h5>
		    <h6>ESL COLOGNE 2016</h6>
		    <a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
video/view/<?php echo $_smarty_tpl->tpl_vars['media_item']->value['video_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['Language']->value->url_slug($_smarty_tpl->tpl_vars['media_item']->value['video_title']);?>
" class="video-icon">
			<i class="fa fa-chevron-right "></i>
		    </a>
		</div>
			
	    </div>
			
	    <img src="<?php echo $_smarty_tpl->tpl_vars['thumbnails']->value['medium']['url'];?>
">
	    
	</div>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
  
	    
    </div>

</section><?php }
}
