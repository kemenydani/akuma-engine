<?php
/* Smarty version 3.1.30, created on 2017-04-19 07:32:27
  from "E:\_PROJECTS\_WAMP_ROOT\akuma\Views\Akuma\templates\Global\_home_news.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f7128b170f68_80637932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b741a5f3653df8b526f4ac54ad5ee279b2056ce4' => 
    array (
      0 => 'E:\\_PROJECTS\\_WAMP_ROOT\\akuma\\Views\\Akuma\\templates\\Global\\_home_news.tpl',
      1 => 1489478562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f7128b170f68_80637932 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="news">
    
    <?php $_smarty_tpl->_assignInScope('news', $_smarty_tpl->tpl_vars['News']->value->find(array('active = 1'),4));
?>
    
    <div class="news-list container">
	
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'news_item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news_item']->value) {
?>
	
	<div class="news-list-item">
	    
	    <div class="overlay">
		
		<div class="content">
		    
		    <h1><?php echo $_smarty_tpl->tpl_vars['news_item']->value['news_title'];?>
</h1>
		    
		    <p><?php echo $_smarty_tpl->tpl_vars['news_item']->value['news_quote'];?>
</p>
		    
		    <a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
news/view/<?php echo $_smarty_tpl->tpl_vars['news_item']->value['news_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['Language']->value->url_slug($_smarty_tpl->tpl_vars['news_item']->value['news_title']);?>
" class="read-more">READ MORE</a>
		    
		</div>
		
	    </div>
	    
	    <img src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
Uploads/files/<?php echo $_smarty_tpl->tpl_vars['news_item']->value['news_image'];?>
">
	    
	</div> <!-- .news-list-item end -->
	
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
   
	    
    </div> <!-- .news-list.container end -->
    
</section> <!-- #news end --><?php }
}
