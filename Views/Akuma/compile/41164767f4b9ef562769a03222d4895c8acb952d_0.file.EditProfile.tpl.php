<?php
/* Smarty version 3.1.30, created on 2017-04-30 09:44:17
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\User\_edit_profile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5905b1f11e8550_98701334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41164767f4b9ef562769a03222d4895c8acb952d' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\User\\_edit_profile.tpl',
      1 => 1480843266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Global/_full.tpl' => 1,
  ),
),false)) {
function content_5905b1f11e8550_98701334 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19895905b1f11e65a6_51877835', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Global/_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_19895905b1f11e65a6_51877835 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
<h1 class="heading">EDIT MY PROFILE</h1>  
<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>

    <?php if (!isset($_smarty_tpl->tpl_vars['success']->value)) {?>

	<form method="POST" class="form-cust" action="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
user/editprofile/">

	    <div class="field display-flex flex-flow-col">
		<label class="heading heading-small">Change password:</label>
		<div>
		    <a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
user/changepw/<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
/"><button type="button">Change password</button></a>
		</div>
	    </div>
	    
	    <div class="field display-flex flex-flow-col">
		<label class="heading heading-small">Email:</label>
		<input class="flex-1" type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" placeholder="Email address">
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
		<label class="heading heading-small">Firstname:</label>
		<input class="flex-1" type="text" name="firstname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['firstname'];?>
" placeholder="Firstname">
		<?php if ($_smarty_tpl->tpl_vars['errors']->value['firstname']) {?>
		    <ul class="msg error">
		    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value['firstname'], 'error');
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
		<label class="heading heading-small">Lastname:</label>
		<input class="flex-1" type="text" name="lastname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['lastname'];?>
" placeholder="Lastname">
		<?php if ($_smarty_tpl->tpl_vars['errors']->value['lastname']) {?>
		    <ul class="msg error">
		    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value['lastname'], 'error');
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
	    
	    <div class="field">

		<div class="flex-pad-container">
		<div class="flex-1 display-flex flex-flow-col">
		    <label class="heading heading-small">Country:</label>
		    <select name="country">

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country_value', false, 'country_key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country_key']->value => $_smarty_tpl->tpl_vars['country_value']->value) {
?>
			    
			    <?php if ($_smarty_tpl->tpl_vars['user']->value['country'] == $_smarty_tpl->tpl_vars['country_key']->value) {?>
				<option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['country_key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['country_value']->value;?>
</option>
			    <?php } else { ?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['country_key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['country_value']->value;?>
</option>
			    <?php }?>  
			    
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		    </select>
		    <?php if ($_smarty_tpl->tpl_vars['errors']->value['country']) {?>
			<ul class="msg error flex-1">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value['country'], 'error');
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
		    
		<div class="flex-1 display-flex flex-flow-col">
		    <label class="heading heading-small">Town:</label>
		    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['city'];?>
" name="city" placeholder="City">
		    <?php if ($_smarty_tpl->tpl_vars['errors']->value['city']) {?>
			<ul class="msg error flex-1">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value['city'], 'error');
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
	    </div>

	    </div>
	    
	    <div class="field display-flex flex-flow-col">
		<label class="heading heading-small">Bio:</label>
		<textarea class="medium" name="bio"><?php echo $_smarty_tpl->tpl_vars['user']->value['bio'];?>
</textarea>
		
		<?php if ($_smarty_tpl->tpl_vars['errors']->value['bio']) {?>
		    <ul class="msg error">
		    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value['bio'], 'error');
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
                        
                      
	    
            <center><button type="submit">Edit Profile</button></center>
	    
    </form>
	
<?php } else { ?>   
    <div class="msg success" >Succesfully updated your profile.</div>
<?php }?>

<?php } else { ?>
    <div class="msg error" >You do not have permission to do that right now! Please log in to edit your profile.</div>
<?php }?>
    

<?php
}
}
/* {/block 'content'} */
}
