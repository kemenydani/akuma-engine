<?php
/* Smarty version 3.1.30, created on 2017-04-19 10:12:29
  from "E:\_PROJECTS\_WAMP_ROOT\akuma\Views\Akuma\templates\Global\page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f7380db4eb13_21650512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f524951833ea5898ed9c78af92d23fa950054b6b' => 
    array (
      0 => 'E:\\_PROJECTS\\_WAMP_ROOT\\akuma\\Views\\Akuma\\templates\\Global\\page.tpl',
      1 => 1492255106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f7380db4eb13_21650512 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['pages']->value > 1) {?>

<div class="container pagination-container">

    <ul class="pagination">

        <li class="<?php if (($_smarty_tpl->tpl_vars['current']->value-1 < 1)) {?>disabled<?php }?>">
            <a href="<?php if (($_smarty_tpl->tpl_vars['current']->value > 1)) {
echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['url']->value;
echo $_smarty_tpl->tpl_vars['current']->value-1;?>
/<?php echo $_smarty_tpl->tpl_vars['searchurl']->value;
}?>" aria-label="Previous">prev</a>
        </li>

        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['pages']->value) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['pages']->value; $_smarty_tpl->tpl_vars['i']->value++) {
?>
        <li class="<?php if (($_smarty_tpl->tpl_vars['i']->value+1 == $_smarty_tpl->tpl_vars['current']->value)) {?>active<?php }?>">
            <a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['url']->value;
echo $_smarty_tpl->tpl_vars['i']->value+1;?>
/<?php echo $_smarty_tpl->tpl_vars['searchurl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</a>
        </li>
        <?php }
}
?>


        <li class="<?php if ($_smarty_tpl->tpl_vars['current']->value == $_smarty_tpl->tpl_vars['pages']->value) {?>disabled<?php }?>">
            <a href="<?php if ($_smarty_tpl->tpl_vars['current']->value < $_smarty_tpl->tpl_vars['pages']->value) {
echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['url']->value;
echo $_smarty_tpl->tpl_vars['current']->value+1;?>
/<?php echo $_smarty_tpl->tpl_vars['searchurl']->value;
}?>" aria-label="Next">next</a>
        </li>

    </ul>

    <div class="clearfix"></div>

</div>

<?php }
}
}
