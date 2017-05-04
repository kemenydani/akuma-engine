<div class="container">
    {if !$user}
        <div id="login" class="login-area">
            <p>Please log in to post comments and create forum topics.</p>
            <form id="login-form" action="{$base}user/login" method="POST">
                <div id="login-form-inputs">
                    <input name="username" placeholder="Username" type="text">
                    <input name="password" placeholder="Password" type="password">
                </div>
                <div class="">
                    <button class="button button-dark button-medium" type="button" id="init-login">Login</button>
                    <button class="button button-dark button-medium" onclick="window.location.href='{$base}user/register/'" type="button">Register</button>
                    <button class="button button-dark button-medium" onclick="window.location.href='{$base}user/recover/'" type="button">Lost pw</button>
                </div>
            </form>
            <div style="display: none" id="login-form-errors">
                <ul class="error_messages"></ul>
                <button class="button button-dark button-medium" onclick="$('#login-form-errors .error_messages').html('') ,$('#login-form-errors').hide(), $('#login-form').fadeIn(300)" type="button">Try again!</button>
            </div>
        </div>
        <script>
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
                    tryLogin.ajaxPromise("{$base}user/login/", "POST", $("#login-form").serializeArray()).done(function(error_arr){
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
        </script>
    {else}
        <div class="container user-logged login-area">
            Logged in as &nbsp;{user user_id=$user.user_id}&nbsp;&nbsp;&nbsp;
            <a href="{$base}user/editprofile/"><i class="logout fa fa-cog fa-1x" aria-hidden="true"></i> Edit profile</a>
            <a href="{$base}user/logout/"><i class="logout fa fa-power-off fa-1x" aria-hidden="true"></i> Logout</a>
            {if $forum_id}
                <button onclick="window.location.href='{$base}forum/create_thread/{$forum_id}/'"class="create-thread button button-dark button-medium pull-right">Create topic</button>
            {/if}
        </div>
    {/if}

</div>
<br>

</script>