<?php
/* Smarty version 3.1.30, created on 2017-05-01 11:47:24
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Partners\_all.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5907204c9cf914_77220757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0517282b005c17c50de417884566a93c4384d503' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Partners\\_all.tpl',
      1 => 1491489268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Global/_full.tpl' => 1,
  ),
),false)) {
function content_5907204c9cf914_77220757 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_321005907204c9ce990_17884201', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Global/_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_321005907204c9ce990_17884201 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <section id="content" class="content-dark-themed">

        <div class="container">

        <br>

        <h1 class="heading">SPONSORS</h1>

        <br>

        <?php if ($_smarty_tpl->tpl_vars['sponsors']->value) {?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sponsors']->value, 'sponsor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sponsor']->value) {
?>
            <div class="container panel panel-dark margin-bottom-2x partner-list-item" style="position: relative;>">

                <div class="partner-list-item-content">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['sponsor']->value['partner_url'];?>
">
                        <img onerror="imgError(this);" src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
source/<?php echo $_smarty_tpl->tpl_vars['sponsor']->value['partner_img'];?>
">
                    </a>
                    <h2>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['sponsor']->value['partner_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['sponsor']->value['partner_name'];?>
</a>
                    </h2>
                    <p>
                        <?php echo $_smarty_tpl->tpl_vars['sponsor']->value['description'];?>

                    </p>
                </div>

                <a href="<?php echo $_smarty_tpl->tpl_vars['sponsor']->value['partner_url'];?>
">
                    <button class="button button-rounded button-medium button-brand" type="button">Visit website</button>
                </a>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        <?php } else { ?>
            There are no sponsors.
        <?php }?>

        </div>

    </section>

<?php
}
}
/* {/block 'content'} */
}
