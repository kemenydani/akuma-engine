{extends file="Global/_full.tpl"} 

{block name=content}

<style>
	#user-profile #cropContainerModal, #user-profile .user-avatar {
		max-width: 300px !important;
		width: 300px !important;
		height: 300px;
		max-height: 300px !important;
		overflow: hidden;
		position: relative;
		border: 1px solid #eaeaea;
	}
	#user-profile #cropContainerModal img, #user-profile .user-avatar img {
		max-width: 300px !important;
		width: 300px !important;
		height: 300px;
		max-height: 300px !important;
	}
</style>

<section id="content">
	<br>
	<h1 class="heading">PROFILE OF {$details.username}</h1>
	<br>
	<div class="container">
    	<div class="panel" id="user-profile">
    
			<div class="display-flex">

			<div style="margin-right: 30px" id="{if $user.user_id == $details.user_id}cropContainerModal{/if}" class="user-avatar">
				<img onerror="imgError(this);" src="{$base}{$details.avatar}">
			</div>

			<div class="padding-15">
				<h1 class="margin-5">
				{if $details.firstname && $details.lastname}
					{$details.firstname} {$details.lastname}
				{elseif ($details.firstname)}
					{$details.firstname}
				{/if}
				</h1>

				{if $details.country}
				<span class="margin-5">
				{country country_id=$details.country}{if $details.city}, {$details.city}{/if}
				</span>
				<br>
				{/if}
				<hr>
				<span class="margin-5">
					Online: {$details.last_seen|relative_date}
				</span>
				<br>
			</div>

			</div>


		</div>

		<br><br><br><br>
		<script>

			$(document).ready(function(){

				var croppicContainerModalOptions = {
					uploadUrl:'{$base}croppic/upload/',
					cropUrl:'{$base}croppic/crop/',
					//loadPicture:'{$base}{$user.avatar}',
					modal:true,
					imgEyecandyOpacity:0.4,
					loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
					onBeforeImgUpload: function(){ console.log('onBeforeImgUpload') },
					onAfterImgUpload: function(){
						$("cropContainerModal").html("");
					},
					onImgDrag: function(){ console.log('onImgDrag') },
					onImgZoom: function(){ console.log('onImgZoom') },
					onBeforeImgCrop: function(){ console.log('onBeforeImgCrop') },
					onAfterImgCrop:function(){ console.log('onAfterImgCrop') },
					onReset:function(){ console.log('onReset') },
					onError:function(errormessage){ console.log('onError:'+errormessage) }
				}

				var cropContainerModal = new Croppic('cropContainerModal', croppicContainerModalOptions);

			});

		</script>

	</div>
</section>
{/block}