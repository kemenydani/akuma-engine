<?php
/* Smarty version 3.1.30, created on 2017-04-29 09:23:15
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Forum\_user_area.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59045b83386ec5_78462659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8d08f895dd91a5c26802b72a557f92e0e778559' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Forum\\_user_area.tpl',
      1 => 1492512076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59045b83386ec5_78462659 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_user')) require_once 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Core\\Assets\\Smarty\\plugins\\function.user.php';
?>
<div class="container">
    <?php if (!$_smarty_tpl->tpl_vars['user']->value) {?>
        <div id="login" class="login-area">
            <p>Please log in to post comments and create forum topics.</p>
            <form id="login-form" action="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
user/login" method="POST">
                <div id="login-form-inputs">
                    <input name="username" placeholder="Username" type="text">
                    <input name="password" placeholder="Password" type="password">
                </div>
                <div class="">
                    <button class="button button-dark button-medium" type="button" id="init-login">Login</button>
                    <button class="button button-dark button-medium" onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
user/register/'" type="button">Register</button>
                    <button class="button button-dark button-medium" onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
user/recover/'" type="button">Lost pw</button>
                </div>
            </form>
            <div style="display: none" id="login-form-errors">
                <ul class="error_messages"></ul>
                <button class="button button-dark button-medium" onclick="$('#login-form-errors .error_messages').html('') ,$('#login-form-errors').hide(), $('#login-form').fadeIn(300)" type="button">Try again!</button>
            </div>
        </div>
        <?php echo '<script'; ?>
>
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
                $("#init-login" ).click(function(event) {
                    var tryLogin = new ajaxObject();
                    tryLogin.ajaxPromise("<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
user/login/", "POST", $("#login-form").serializeArray()).done(function(error_arr){
                        $("#login-form").hide();
                        $.each( error_arr, function(error_field, error_message) {
                            $.each(error_message, function(field, message){
                                $("#login-form-errors .error_messages").append("<li>"+error_field+ ': '+message+"</li>");
                            });
                        });
                        $("#login-form-errors").fadeIn(300);
                    }).fail(function(){
                        location.reload();
                    });
                });
            });
        <?php echo '</script'; ?>
>
    <?php } else { ?>
        <div class="container user-logged login-area">
            Logged in as &nbsp;<?php echo smarty_function_user(array('user_id'=>$_smarty_tpl->tpl_vars['user']->value['user_id']),$_smarty_tpl);?>
&nbsp;&nbsp;&nbsp;
            <a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
user/editprofile/"><i class="logout fa fa-cog fa-1x" aria-hidden="true"></i> Edit profile</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
user/logout/"><i class="logout fa fa-power-off fa-1x" aria-hidden="true"></i> Logout</a>
            <?php if ($_smarty_tpl->tpl_vars['forum_id']->value) {?>
                <button onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
forum/create_thread/<?php echo $_smarty_tpl->tpl_vars['forum_id']->value;?>
/'"class="create-thread button button-dark button-medium pull-right">Create topic</button>
            <?php }?>
        </div>
    <?php }?>

</div>
<br>

<?php echo '</script'; ?>
><?php }
}
