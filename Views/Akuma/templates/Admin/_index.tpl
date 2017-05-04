<!DOCTYPE html>
<html lang="en">

<html>
<head>
<meta http-equiv="content-type" content="text/plain;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="{$includes}libs/bootstrap/bootstrap-stock/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen, projection"/>
<script type="text/javascript" src="{$includes}js/jquery-11.0.min.js"></script>
<script type="text/javascript" src="{$includes}libs/bootstrap/bootstrap-stock/js/bootstrap.min.js"></script>

<link href="{$includes}libs/jquery_ui_admin/jquery-ui.min.css" rel="stylesheet" type="text/css"  media="screen, projection"/>
<script type="text/javascript" src="{$includes}libs/jquery_ui_admin/jquery-ui.min.js"></script>

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

{if $user}

	{if $user.level > 4}

	{include file="Admin/_navigation.tpl"}

	<div class="" style="margin-top: 70px;">
		<div class="container-fluid">

		{include file="Admin/_breadcrumb.tpl"}

		{block name=index}{/block}

		</div>
	</div>

	{else}
		<div class="container-fluid">
			<br>
			<br>
			<div class="container alert alert-danger">
				You have no admin rights to access this page.
			</div>
		</div>
	{/if}

{else}
<section class="container-fluid">
	<div class="container">
		<br>
		<br>
		<div class="jumbotron" id="login">
			<h1 style="">Admin Panel</h1>
			<p  style="">Welcome! Please login to access the admin panel!</p>
			<hr>

			<form id="login-form" action="{$base}user/login" method="POST">

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
					<button class="btn btn-default" onclick="window.location.href='{$base}user/register/'" type="button">Register</button>
					<button class="btn btn-default" onclick="window.location.href='{$base}user/recover/'" type="button">Lost pw</button>
				</div>

			</form>

			<div style="display: none" id="login-form-errors">
			<ul style="padding-left: 30px" class="error_messages alert alert-danger"></ul>
			<button class="btn btn-success" onclick="$('#login-form-errors .error_messages').html('') ,$('#login-form-errors').hide(), $('#login-form').fadeIn(300)" type="button">Try again!</button>

		</div>
	</div>
</section>
<script type="text/javascript">
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
		tryLogin.ajaxPromise("{$base}user/login/", "POST", $("#login-form").serializeArray()).done(function(error_arr){
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
</script>
{/if}
</body>
</html>