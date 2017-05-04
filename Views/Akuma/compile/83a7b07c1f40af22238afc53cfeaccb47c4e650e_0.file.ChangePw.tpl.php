<?php
/* Smarty version 3.1.30, created on 2017-04-30 11:25:20
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\User\_change_password.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5905c9a0e2d781_26533199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83a7b07c1f40af22238afc53cfeaccb47c4e650e' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\User\\_change_password.tpl',
      1 => 1480843266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Global/_full.tpl' => 1,
  ),
),false)) {
function content_5905c9a0e2d781_26533199 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_294265905c9a0e2c028_00898038', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Global/_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_294265905c9a0e2c028_00898038 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

<h1 class="heading">CHANGE PASSWORD</h1>     

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

                        <center><button type="submit" value="Register">Change password</button></center>
                    </form>

                    <?php } else { ?>   
                        <div class="msg success">Your password has been changed.</div>
		    <?php }?>
		    
<?php } else { ?> 
    <div class="msg error" >You dont have permission for that.</div>
<?php }?> 
 
<?php
}
}
/* {/block 'content'} */
}
