<?php
/* Smarty version 3.1.30, created on 2017-04-30 18:32:33
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\User\_change_password.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59062dc1c32bc5_81054813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d9242c48f65dc730adbbf4577138d8d3c831c00' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\User\\_change_password.tpl',
      1 => 1493577152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Global/_full.tpl' => 1,
  ),
),false)) {
function content_59062dc1c32bc5_81054813 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_942959062dc1c313a7_35639657', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Global/_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_942959062dc1c313a7_35639657 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="content">
    <br>
    <h1 class="heading">CHANGE PASSWORD</h1>
    <div class="container">
    <br>


    <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>

    <?php if (!isset($_smarty_tpl->tpl_vars['success']->value)) {?>

    <form class="form-cust" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
user/changepw/<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
/">

        <div class="field display-flex flex-flow-col">
            <label class="heading heading-small">Current password:</label>
            <input type="text" name="password" placeholder="Current password">
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['password']) {?>

                    <ul class="msg error">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value['password'], 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ul>

            <?php }?>
        </div>

        <div class="field display-flex flex-flow-col">
            <label class="heading heading-small">New password:</label>
            <input type="text" name="password_new" placeholder="New password">
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['password_new']) {?>

                    <ul class="msg error">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value['password_new'], 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ul>

            <?php }?>
        </div>

        <div class="field display-flex flex-flow-col">
            <label class="heading heading-small">New password again:</label>
            <input type="text" name="password_new_again" placeholder="New password again">
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['password_new_again']) {?>

                    <ul class="msg error">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value['password_new_again'], 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ul>

            <?php }?>
        </div>

        <div class="field display-flex flex-flow-col">
            <label class="heading heading-small">Security Captcha:</label>
            <?php $_smarty_tpl->_assignInScope('cfg', $_smarty_tpl->tpl_vars['Settings']->value->find(array('variable_name = "capcha_site_key"'),1));
?>
            <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['setting_value'];?>
"></div>

            <?php if ($_smarty_tpl->tpl_vars['errors']->value['recaptcha']) {?>
            <ul class="msg error">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value['recaptcha'], 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
                <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
            <?php }?>
        </div>

        <center><button class="button button-dark button-medium" type="submit">Change password</button></center>
        <br>
        <br>
    </form>

    <?php } else { ?>
    <div class="msg success">Your password has been changed.</div>
    <?php }?>

    <?php } else { ?>
        <div class="msg error" >You dont have permission for that.</div>
    <?php }?>

    </div>
</section>

<?php
}
}
/* {/block 'content'} */
}
