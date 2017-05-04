<?php
/* Smarty version 3.1.30, created on 2017-04-19 10:12:53
  from "E:\_PROJECTS\_WAMP_ROOT\akuma\Views\Akuma\templates\Global\pagination.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f7382512ee37_80707135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb062db1a838c9b377a39324a67ef858e4983f2b' => 
    array (
      0 => 'E:\\_PROJECTS\\_WAMP_ROOT\\akuma\\Views\\Akuma\\templates\\Global\\pagination.tpl',
      1 => 1480842426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f7382512ee37_80707135 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['details']->value['Pages'] > 1) {?>
    
<center>
<nav>
  <ul class="pagination pagination-sm">
      
    <li class="<?php if (($_smarty_tpl->tpl_vars['details']->value['Current']-1 < 1)) {?>disabled<?php }?>">
        <a href="<?php if (($_smarty_tpl->tpl_vars['details']->value['Current'] > 1)) {
echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['url']->value;
echo $_smarty_tpl->tpl_vars['details']->value['Current']-1;?>
/<?php echo $_smarty_tpl->tpl_vars['searchurl']->value;
}?>" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
        </a>
    </li>
    
    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['details']->value['Pages']) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['details']->value['Pages']; $_smarty_tpl->tpl_vars['i']->value++) {
?>
        <li class="<?php if (($_smarty_tpl->tpl_vars['i']->value+1 == $_smarty_tpl->tpl_vars['details']->value['Current'])) {?>active<?php }?>">
            <a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['url']->value;
echo $_smarty_tpl->tpl_vars['i']->value+1;?>
/<?php echo $_smarty_tpl->tpl_vars['searchurl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
 <span class="sr-only">(current)</span></a>
        </li>
    <?php }
}
?>

    
    <li class="<?php if ($_smarty_tpl->tpl_vars['details']->value['Current'] == $_smarty_tpl->tpl_vars['details']->value['Pages']) {?>disabled<?php }?>">
        <a href="<?php if ($_smarty_tpl->tpl_vars['details']->value['Current'] < $_smarty_tpl->tpl_vars['details']->value['Pages']) {
echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['url']->value;
echo $_smarty_tpl->tpl_vars['details']->value['Current']+1;?>
/<?php echo $_smarty_tpl->tpl_vars['searchurl']->value;
}?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
        </a>
    </li>
    
  </ul>
  <div class="clearfix"></div>
</nav>
</center>
<?php }
}
}
