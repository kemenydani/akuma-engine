<?php
/* Smarty version 3.1.30, created on 2017-05-01 12:07:27
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Global\_home_articles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590724ff09c0b0_67679947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8176d11f749026124a4e77fec56bb510c338adf9' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Global\\_home_articles.tpl',
      1 => 1493640444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590724ff09c0b0_67679947 (Smarty_Internal_Template $_smarty_tpl) {
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
