<?php
/* Smarty version 3.1.30, created on 2017-04-19 07:32:26
  from "E:\_PROJECTS\_WAMP_ROOT\akuma\Views\Akuma\templates\Global\_slider.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f7128aeadfb3_26981662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f419dbb7ecebd43f6cc3fc36e834809844d75b8' => 
    array (
      0 => 'E:\\_PROJECTS\\_WAMP_ROOT\\akuma\\Views\\Akuma\\templates\\Global\\_slider.tpl',
      1 => 1489478644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f7128aeadfb3_26981662 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="slider">

    <?php $_smarty_tpl->_assignInScope('news', $_smarty_tpl->tpl_vars['News']->value->find(array('active = 1','featured = 1'),3));
?>
    
    <div id="left-control" class="control-button left-control">
	<i class="fa fa-chevron-left fa-2x"></i>
    </div>

    <div id="right-control" class="control-button right-control">
	<i class="fa fa-chevron-right fa-2x"></i>
    </div>

    <div id="slides" class="content">
	
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'news_item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news_item']->value) {
?>
	    
	<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
news/view/<?php echo $_smarty_tpl->tpl_vars['news_item']->value['news_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['Language']->value->url_slug($_smarty_tpl->tpl_vars['news_item']->value['news_title']);?>
">
	    
	    <div class="slide">
		
		<div class="container content">
		    <h1><?php echo $_smarty_tpl->tpl_vars['news_item']->value['news_title'];?>
</h1>
		    <p><?php echo $_smarty_tpl->tpl_vars['news_item']->value['slider_desc'];?>
</p>
		    <br>
		    <button type="button" class="button button-brand-border button-big button-rounded">READ MORE</button>
		</div>
		    
		<img src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
Uploads/files/<?php echo $_smarty_tpl->tpl_vars['news_item']->value['slider_image'];?>
">
		
	    </div>
	    
	</a>
	
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	
    </div> <!-- .slides -->

    <?php echo '<script'; ?>
 type="text/javascript">

	$(document).ready(function() {
	    
	    var options = {
		'container' : "#slider",
		'slide_container' : "#slides",
		'slides' : ".slide",
		'left_control' : "#left-control",
		'right_control' : "#right-control",
		'navigation' : "#slider-nav",
		'slide_interval' : 4000,
		'animation_speed' : 300,
		'direction' : 1
	    };

	    var SliderObject = new Slider(options);
	    
	    SliderObject.startSlider();
	});

    <?php echo '</script'; ?>
>

</section> <!-- #slider -->
<?php }
}
