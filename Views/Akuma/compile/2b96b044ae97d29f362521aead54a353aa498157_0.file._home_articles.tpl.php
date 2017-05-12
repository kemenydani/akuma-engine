<?php
/* Smarty version 3.1.30, created on 2017-05-12 14:44:14
  from "E:\_PROJECTS\_WAMP_ROOT\akuma\Views\Akuma\templates\Global\_home_articles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5915ca3e85cc57_09235494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b96b044ae97d29f362521aead54a353aa498157' => 
    array (
      0 => 'E:\\_PROJECTS\\_WAMP_ROOT\\akuma\\Views\\Akuma\\templates\\Global\\_home_articles.tpl',
      1 => 1493640446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5915ca3e85cc57_09235494 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="articles">
    <?php $_smarty_tpl->_assignInScope('articles', $_smarty_tpl->tpl_vars['News']->value->find(array('active = 1'),6));
?>
    <br>
    <h1 class="headline-rounded headline-dark headline-big">ARTICLES</h1>
    <br>
    <div class="container">
		<div class="article-slider">
			<div class="arrow prev">
				<i class="fa fa-2x fa-angle-left" aria-hidden="true"></i>
			</div>
			<div class="arrow next">
				<i class="fa fa-2x fa-angle-right" aria-hidden="true"></i>
			</div>
	    	<div class="article-list">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article_item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article_item']->value) {
?>
			<div class="article-list-item">
				<div class="image">
					<img onerror="imgError(this)" src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
Uploads/files/<?php echo $_smarty_tpl->tpl_vars['article_item']->value['news_image'];?>
">
				</div>
				<h1><?php echo $_smarty_tpl->tpl_vars['article_item']->value['news_title'];?>
</h1>
				<p class="big-text teaser"><?php echo $_smarty_tpl->tpl_vars['article_item']->value['news_quote'];?>
</p>
				<p class="big-text"></p>
				<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
news/view/<?php echo $_smarty_tpl->tpl_vars['article_item']->value['news_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['Language']->value->url_slug($_smarty_tpl->tpl_vars['article_item']->value['news_title']);?>
"><button type="button" class="button button-dark button-big">READ MORE</button></a>
				<br>
				<br>
			</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	    	</div> <!-- .article-list end -->
		</div> <!-- article-slider end -->
    </div> <!-- .container end -->
</section> <!-- a#articles end --><?php }
}
