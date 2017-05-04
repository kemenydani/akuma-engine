		
<div id="login" class="display-flex flex-flow-col">
    
    <h2>USER AREA</h2>
    <br>
	
    <form class="display-flex flex-flow-col flex-1 flex-wrap" id="login-form" action="{$base}user/login" method="POST">
	
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
	    <button onclick="window.location.href='{$base}user/register/'" type="button">Register</button>
	    <button onclick="window.location.href='{$base}user/recover/'" type="button">Lost pw</button>
	</div>
	
    </form>
	
    <div style="display: none" id="login-form-errors">
	<div class="error_messages">
	    
	</div>
	<button onclick="$('#login-form-errors .error_messages').html('') ,$('#login-form-errors').hide(), $('#login-form').fadeIn(300)" type="button">Try again!</button>
    </div>

</div>
    
<script>
    
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
	
	tryLogin.ajaxPromise("{$base}user/login/", "POST", $("#login-form").serializeArray()).done(function(error_arr){

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
</script>