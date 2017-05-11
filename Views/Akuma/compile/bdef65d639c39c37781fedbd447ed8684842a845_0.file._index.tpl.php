<?php
/* Smarty version 3.1.30, created on 2017-05-11 12:47:40
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Global\_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59145d6c246130_63472051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdef65d639c39c37781fedbd447ed8684842a845' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Global\\_index.tpl',
      1 => 1494506455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Global/_header.tpl' => 1,
    'file:Global/_footer.tpl' => 1,
  ),
),false)) {
function content_59145d6c246130_63472051 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS - FONTAWESOME -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['includes']->value;?>
css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <!-- CSS - LAYOUT -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['includes']->value;?>
css/layout.css" rel="stylesheet" type="text/css"/>
    <!-- CSS - UNITEGALLERY -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['includes']->value;?>
libs/unitegallery/css/unite-gallery.css" rel="stylesheet" type="text/css"/>
    <!-- CSS - JQUERYUI -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['includes']->value;?>
libs/jquery_ui_admin/jquery-ui.min.css" rel="stylesheet" type="text/css"/>

    <link href="<?php echo $_smarty_tpl->tpl_vars['includes']->value;?>
libs/croppic/croppic.css" rel="stylesheet" type="text/css"/>

    <!-- JS - JQUERY -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['includes']->value;?>
js/jquery-11.0.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <!-- JS - JQUERYUI -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['includes']->value;?>
libs/jquery_ui_admin/jquery-ui.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <!-- JS - RECAPTCHA -->
    <?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
    <!-- JS - SLIDER -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['includes']->value;?>
js/Slider.js" type="text/javascript"><?php echo '</script'; ?>
>
    <!-- JS - SLIDESHOW -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['includes']->value;?>
js/slideshow.js" type="text/javascript"><?php echo '</script'; ?>
>
    <!-- JS - CROPPIC -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['includes']->value;?>
libs/croppic/croppic.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['includes']->value;?>
libs/unitegallery/js/unitegallery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['includes']->value;?>
libs/unitegallery/themes/tiles/ug-theme-tiles.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['includes']->value;?>
libs/unitegallery/themes/grid/ug-theme-grid.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['includes']->value;?>
libs/unitegallery/themes/tilesgrid/ug-theme-tilesgrid.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
		function imgError(image) {
			image.onerror = "";
			image.src = "<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
no-image.png";
			return true;
		}
    <?php echo '</script'; ?>
>

</head>
<body>
    <main id="wrapper">
        <?php $_smarty_tpl->_subTemplateRender("file:Global/_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!--<section id="content">-->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1195959145d6c243348_41066150', 'Index');
?>

        <!--</section>-->
        <!-- #content end -->
        <?php $_smarty_tpl->_subTemplateRender("file:Global/_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </main> <!-- #wrapper end -->

</body>
</html><?php }
/* {block 'Index'} */
class Block_1195959145d6c243348_41066150 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'Index'} */
}
