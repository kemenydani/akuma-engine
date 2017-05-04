<?php
/* Smarty version 3.1.30, created on 2017-04-19 07:32:26
  from "E:\_PROJECTS\_WAMP_ROOT\akuma\Views\Akuma\templates\Global\_home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f7128a3abe34_42343243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9c3cc4663ddc8ca2d574832a09cd49a54a035be' => 
    array (
      0 => 'E:\\_PROJECTS\\_WAMP_ROOT\\akuma\\Views\\Akuma\\templates\\Global\\_home.tpl',
      1 => 1491395572,
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
function content_58f7128a3abe34_42343243 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_865758f7128a3a84f3_59454508', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Global/_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_865758f7128a3a84f3_59454508 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
