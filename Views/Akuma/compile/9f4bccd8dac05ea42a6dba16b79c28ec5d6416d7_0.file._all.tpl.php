<?php
/* Smarty version 3.1.30, created on 2017-05-01 11:46:22
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Teams\_all.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5907200e24c096_15469310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f4bccd8dac05ea42a6dba16b79c28ec5d6416d7' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Teams\\_all.tpl',
      1 => 1492340744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Global/_full.tpl' => 1,
  ),
),false)) {
function content_5907200e24c096_15469310 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117085907200e24abb2_03824936', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Global/_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_117085907200e24abb2_03824936 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="content">
	<br>
	<h1 class="heading">TEAMS</h1>
	<div class="container">
	<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'team');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
?>

	    <a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
teams/view/<?php echo $_smarty_tpl->tpl_vars['team']->value['team_id'];?>
/">
		<h1 class="absolute-title" style="color: white;"><?php echo $_smarty_tpl->tpl_vars['team']->value['team_name'];?>
</h1>
		<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
Uploads/files/<?php echo $_smarty_tpl->tpl_vars['team']->value['team_image'];?>

	    </a>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


	<?php } else { ?>
	    There are no teams.
	<?php }?>

    </div>
</section>
<?php
}
}
/* {/block 'content'} */
}
