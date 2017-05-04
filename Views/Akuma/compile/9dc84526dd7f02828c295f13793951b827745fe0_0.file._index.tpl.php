<?php
/* Smarty version 3.1.30, created on 2017-05-01 11:44:49
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Admin\_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59071fb16eced7_73722783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dc84526dd7f02828c295f13793951b827745fe0' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Admin\\_index.tpl',
      1 => 1493639088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Admin/_navigation.tpl' => 1,
    'file:Admin/_breadcrumb.tpl' => 1,
  ),
),false)) {
function content_59071fb16eced7_73722783 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_576659071fb16e2455_91235882', 'index');
?>


		</div>
	</div>

	<?php } else { ?>
		<div class="container-fluid">
			<br>
			<br>
			<div class="container alert alert-danger">
				You have no admin rights to access this page.
			</div>
		</div>
	<?php }?>

<?php } else { ?>
<section class="container-fluid">
	<div class="container">
		<br>
		<br>
		<div class="jumbotron" id="login">
			<h1 style="">Admin Panel</h1>
			<p  style="">Welcome! Please login to access the admin panel!</p>
			<hr>

			<form id="login-form" action="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
user/login" method="POST">

				<div id="login-form-inputs">
					<div class="form-group">
						<label for="username">Username</label>
						<input class="form-control" name="username" placeholder="Username" type="text">
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input class="form-control" name="password" placeholder="Password" type="password">
					</div>
				</div>

				<div class="pull-right">
					<button class="btn btn-default" type="button" id="init-login">Login</button>
					<button class="btn btn-default" onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
user/register/'" type="button">Register</button>
					<button class="btn btn-default" onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
user/recover/'" type="button">Lost pw</button>
				</div>

			</form>

			<div style="display: none" id="login-form-errors">
			<ul style="padding-left: 30px" class="error_messages alert alert-danger"></ul>
			<button class="btn btn-success" onclick="$('#login-form-errors .error_messages').html('') ,$('#login-form-errors').hide(), $('#login-form').fadeIn(300)" type="button">Try again!</button>

		</div>
	</div>
</section>
<?php echo '<script'; ?>
 type="text/javascript">
var ajaxObject = function(){
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
    $("#init-login" ).click(function() {
		var tryLogin = new ajaxObject();
		tryLogin.ajaxPromise("<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
user/login/", "POST", $("#login-form").serializeArray()).done(function(error_arr){
			$("#login-form").hide();
			$.each( error_arr, function(error_field, error_message) {
				for(var i = 0; i < error_message.length; i++){
					$("#login-form-errors .error_messages").prepend("<li>"+ "<b>" +error_field+"<b>" +error_message[i]+"</li>");
				}
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
</body>
</html><?php }
/* {block 'index'} */
class Block_576659071fb16e2455_91235882 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'index'} */
}
