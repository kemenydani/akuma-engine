<?php
/* Smarty version 3.1.30, created on 2017-04-19 07:26:05
  from "E:\_PROJECTS\_WAMP_ROOT\akuma\Views\Akuma\templates\Admin\_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f7110dd838c6_94992808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6be3033ce3a1230592ced9908882c434f3bde030' => 
    array (
      0 => 'E:\\_PROJECTS\\_WAMP_ROOT\\akuma\\Views\\Akuma\\templates\\Admin\\_index.tpl',
      1 => 1489479334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Admin/_navigation.tpl' => 1,
    'file:Admin/_breadcrumb.tpl' => 1,
  ),
),false)) {
function content_58f7110dd838c6_94992808 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">

<html>
<head>
<meta http-equiv="content-type" content="text/plain;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="<?php echo $_smarty_tpl->tpl_vars['includes']->value;?>
libs/bootstrap/bootstrap-stock/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen, projection"/>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['includes']->value;?>
js/jquery-11.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['includes']->value;?>
libs/bootstrap/bootstrap-stock/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<link href="<?php echo $_smarty_tpl->tpl_vars['includes']->value;?>
libs/jquery_ui_admin/jquery-ui.min.css" rel="stylesheet" type="text/css"  media="screen, projection"/>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['includes']->value;?>
libs/jquery_ui_admin/jquery-ui.min.js"><?php echo '</script'; ?>
>

<style>
   
html,body {
   background-color: #e5e5e5;
   margin:0;
	padding:0;
	
}
   #wrapper {
	
}
.footer {
	width:100%;
	height:100px;
	background:#22B573;
}
#header a {
    color: white;
}
.nav-white a {
    color: white !important;
}
</style>

</head>

<body>

<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>

    <?php if ($_smarty_tpl->tpl_vars['user']->value['level'] > 4) {?>
  
    <?php $_smarty_tpl->_subTemplateRender("file:Admin/_navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    

    <div class="" style="margin-top: 70px;">
	<div class="container-fluid">

	<?php $_smarty_tpl->_subTemplateRender("file:Admin/_breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1586458f7110dd54f32_28668624', 'index');
?>


	</div> 
    </div>     

    <?php } else { ?>  
	You have no admin rights to access this page.
    <?php }?>

<?php } else { ?>
    
		
<div id="login" class="display-flex flex-flow-col">
    
    <h2>USER AREA</h2>
    <br>
	
    <form class="display-flex flex-flow-col flex-1 flex-wrap" id="login-form" action="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
user/login" method="POST">
	
	<div id="login-form-inputs" class="display-flex flex-flow-col flex-1 flex-wrap">
	    
	    <div class="flex-1">
		<input class="flex-1" name="username" placeholder="Username" type="text">
	    </div>
	    
	    <div class="flex-1">
		<input class="flex-1" name="password" placeholder="Password" type="password">
	    </div>

	</div>
	
	
	<div class="flex-self-align-end" style="align-self: flex-end">
	    <button type="button" id="init-login">Login</button>
	    <button onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
user/register/'" type="button">Register</button>
	    <button onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
user/recover/'" type="button">Lost pw</button>
	</div>
	
    </form>
	
    <div style="display: none" id="login-form-errors">
	<div class="error_messages">
	    
	</div>
	<button onclick="$('#login-form-errors .error_messages').html('') ,$('#login-form-errors').hide(), $('#login-form').fadeIn(300)" type="button">Try again!</button>
    </div>

</div>
    
<?php echo '<script'; ?>
>
    
var ajaxObject = function(){
    
    var self = this;
    
    this.ajaxPromise = function(url, method, data, datatype = "json"){
	return $.ajax({
	    url: url,
	    type: method,
	    dataType: datatype,
	    data: data
	});
    }
 
};
    
$( document ).ready(function() {
    
    $("#init-login" ).click(function(event) {
	
	var tryLogin = new ajaxObject();
	
	tryLogin.ajaxPromise("<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
user/login/", "POST", $("#login-form").serializeArray()).done(function(error_arr){

		$("#login-form").hide();
		
		$.each( error_arr, function(error_field, error_message) {
		    console.log(1);
		    $("#login-form-errors .error_messages").prepend("<div class='msg error flex-1'>"+error_message+"</div><br>");
		    
		    //console.log( error_field + ": " + error_message );
		});
		
		$("#login-form-errors").fadeIn(300);
	    
	}).fail(function(){

		location.reload();
	    
	});
	
    });
    
    

});
<?php echo '</script'; ?>
>

<?php }?>

</html><?php }
/* {block 'index'} */
class Block_1586458f7110dd54f32_28668624 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'index'} */
}
