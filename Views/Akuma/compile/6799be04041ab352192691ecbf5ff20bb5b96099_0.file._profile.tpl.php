<?php
/* Smarty version 3.1.30, created on 2017-05-01 17:42:46
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\User\_profile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59077396e2c719_90405646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6799be04041ab352192691ecbf5ff20bb5b96099' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\User\\_profile.tpl',
      1 => 1493660561,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Global/_full.tpl' => 1,
  ),
),false)) {
function content_59077396e2c719_90405646 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_country')) require_once 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Core\\Assets\\Smarty\\plugins\\function.country.php';
if (!is_callable('smarty_modifier_relative_date')) require_once 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Core\\Assets\\Smarty\\plugins\\modifier.relative_date.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2003359077396e2b298_59776360', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Global/_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_2003359077396e2b298_59776360 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


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
	<h1 class="heading">PROFILE OF <?php echo $_smarty_tpl->tpl_vars['details']->value['username'];?>
</h1>
	<br>
	<div class="container">
    	<div class="panel" id="user-profile">
    
			<div class="display-flex">

			<div style="margin-right: 30px" id="<?php if ($_smarty_tpl->tpl_vars['user']->value['user_id'] == $_smarty_tpl->tpl_vars['details']->value['user_id']) {?>cropContainerModal<?php }?>" class="user-avatar">
				<img onerror="imgError(this);" src="<?php echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['details']->value['avatar'];?>
">
			</div>

			<div class="padding-15">
				<h1 class="margin-5">
				<?php if ($_smarty_tpl->tpl_vars['details']->value['firstname'] && $_smarty_tpl->tpl_vars['details']->value['lastname']) {?>
					<?php echo $_smarty_tpl->tpl_vars['details']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['details']->value['lastname'];?>

				<?php } elseif (($_smarty_tpl->tpl_vars['details']->value['firstname'])) {?>
					<?php echo $_smarty_tpl->tpl_vars['details']->value['firstname'];?>

				<?php }?>
				</h1>

				<?php if ($_smarty_tpl->tpl_vars['details']->value['country']) {?>
				<span class="margin-5">
				<?php echo smarty_function_country(array('country_id'=>$_smarty_tpl->tpl_vars['details']->value['country']),$_smarty_tpl);
if ($_smarty_tpl->tpl_vars['details']->value['city']) {?>, <?php echo $_smarty_tpl->tpl_vars['details']->value['city'];
}?>
				</span>
				<br>
				<?php }?>
				<hr>
				<span class="margin-5">
					Online: <?php echo smarty_modifier_relative_date($_smarty_tpl->tpl_vars['details']->value['last_seen']);?>

				</span>
				<br>
			</div>

			</div>


		</div>

		<br><br><br><br>
		<?php echo '<script'; ?>
>

			$(document).ready(function(){

				var croppicContainerModalOptions = {
					uploadUrl:'<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
croppic/upload/',
					cropUrl:'<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
croppic/crop/',
					//loadPicture:'<?php echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
',
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

		<?php echo '</script'; ?>
>

	</div>
</section>
<?php
}
}
/* {/block 'content'} */
}
