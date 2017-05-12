<?php
/* Smarty version 3.1.30, created on 2017-05-12 14:44:14
  from "E:\_PROJECTS\_WAMP_ROOT\akuma\Views\Akuma\templates\Global\_home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5915ca3e510881_49944901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9c3cc4663ddc8ca2d574832a09cd49a54a035be' => 
    array (
      0 => 'E:\\_PROJECTS\\_WAMP_ROOT\\akuma\\Views\\Akuma\\templates\\Global\\_home.tpl',
      1 => 1494509450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Global/_full.tpl' => 1,
    'file:Global/_slider.tpl' => 1,
    'file:Global/_home_about.tpl' => 1,
    'file:Global/_home_news.tpl' => 1,
    'file:Global/_home_articles.tpl' => 1,
    'file:Global/_home_teams.tpl' => 1,
    'file:Global/_home_media.tpl' => 1,
  ),
),false)) {
function content_5915ca3e510881_49944901 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_241235915ca3e50e758_83364527', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Global/_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_241235915ca3e50e758_83364527 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
 type="text/javascript">
	    $(document).ready(function(){
		    //Slider instance 1
            /*
             var options = {
             main: ".player-slider",
             container: ".player-list",
             btn_next: ".next-player",
             btn_prev: ".prev-player",
             debug: true
             };
             var cs = new contentSlider(options);
             */
		    //Slider instance 2
		    var options2 = {
			    main: ".article-slider",
			    container: ".article-list",
			    btn_next: ".next",
			    btn_prev: ".prev"
		    };
		    var cs2 = new contentSlider(options2);

		    //Slider instance 3
		    var options3 = {
			    main: ".team-slider",
			    container: ".team-list",
			    btn_next: ".next-team",
			    btn_prev: ".prev-team"
		    };
		    var cs3 = new contentSlider(options3);
	    });
    <?php echo '</script'; ?>
>

    <section id="content">
    <?php $_smarty_tpl->_subTemplateRender("file:Global/_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <?php $_smarty_tpl->_subTemplateRender("file:Global/_home_about.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <?php $_smarty_tpl->_subTemplateRender("file:Global/_home_news.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <?php $_smarty_tpl->_subTemplateRender("file:Global/_home_articles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <?php $_smarty_tpl->_subTemplateRender("file:Global/_home_teams.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <?php $_smarty_tpl->_subTemplateRender("file:Global/_home_media.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </section>
<?php
}
}
/* {/block 'content'} */
}
