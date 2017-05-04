<?php
/* Smarty version 3.1.30, created on 2017-04-30 18:34:15
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\User\_recover.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59062e275f1aa8_17303488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fcde8fc2b36487c2df48bd74b4a82590aed3ab3' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\User\\_recover.tpl',
      1 => 1492348250,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Global/_full.tpl' => 1,
  ),
),false)) {
function content_59062e275f1aa8_17303488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
    <div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1243259062e275f0237_42821354', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Global/_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_1243259062e275f0237_42821354 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

<section id="content">
    <div class="container">
    <br>
    <h1 class="heading">PASSWORD RECOVERY</h1>

    <?php if (!$_smarty_tpl->tpl_vars['user']->value) {?>

    <?php if (!isset($_smarty_tpl->tpl_vars['success']->value)) {?>

    <form class="form-cust" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
user/recover">
        <div class="field display-flex flex-flow-col">
            <label class="heading heading-small">Registered email:</label>
            <input type="email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
" name="email" placeholder="Email address">
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['email']) {?>
            <ul class="msg error">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value['email'], 'error');
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
            <input type="text" name="password" placeholder="Password">
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
            <label class="heading heading-small">New password again:</label>
            <input type="text" name="password_again" placeholder="Password again">
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['password_again']) {?>
            <ul class="msg error">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value['password_again'], 'error');
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
        <center><button class="button button-dark button-medium" type="submit">Start recovery</button></center>
    </form>

    <?php } else { ?>
        <div class="msg success">An verification email has been sent to your email inbox. Open the email and click verify if you want to change your password.!</div>
    <?php }?>

    <?php } else { ?>
        <div class="msg info" >You can't start a password recovery process while you are logged in.</div>
    <?php }?>
    </div>
    <br>
</section>

<?php
}
}
/* {/block 'content'} */
}
