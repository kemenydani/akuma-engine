<?php
/* Smarty version 3.1.30, created on 2017-04-30 09:19:14
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Admin\_default_edit_form_fields.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5905ac12320945_89542279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f3d1a191b35eba24d6065b1bb89e120944f84af' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Admin\\_default_edit_form_fields.tpl',
      1 => 1480842426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Admin/_full.tpl' => 1,
  ),
),false)) {
function content_5905ac12320945_89542279 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_field')) require_once 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Core\\Assets\\Smarty\\plugins\\function.field.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45345905ac1231f1d1_37089691', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Admin/_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_45345905ac1231f1d1_37089691 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="row"> 
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php if ((!$_smarty_tpl->tpl_vars['message']->value)) {?>
                <form class="form-horizontal" role="form" id="form_<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['controller']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['item']->value) {?>edit/<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
/<?php } else { ?>add/<?php }?>">
                    <div class="form group form-group-sm">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'field', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['field']->value) {
?>
			    
                            <?php if ((!isset($_smarty_tpl->tpl_vars['field']->value['display']['hidden']))) {?>
				
				<?php $_smarty_tpl->_assignInScope('value', '');
?>
				
				<?php if (array_key_exists($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['item']->value)) {?>
				    <?php $_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['key']->value]);
?>
                                <?php }?>
				
				<?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
				    <?php $_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['key']->value]);
?>
				<?php }?>
		
                                <?php echo smarty_function_field(array('dir'=>'Admin/input_fields/','error'=>$_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->tpl_vars['key']->value],'type'=>$_smarty_tpl->tpl_vars['field']->value['type'],'name'=>$_smarty_tpl->tpl_vars['key']->value,'details'=>$_smarty_tpl->tpl_vars['field']->value,'value'=>$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl);?>

                                <hr>
				
                            <?php }?>
			    
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                    </div><!-- form-group -->
                    <div>
			
			<center>
			    <button type="submit" class="btn btn-success">Submit</button>
			    <a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['controller']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['item']->value) {?>edit/<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
/<?php } else { ?>add/<?php }?>">
				<button type="button" class="btn btn-default">Reset</button>
			    </a>
			</center>
				    <div class="clearfix"></div>
			<br>    <div class="clearfix"></div>
                    </div>
                </form><!-- form -->
                <?php } else { ?>
                    <div class="alert alert-success" role="alert"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
                    <span class="pull-right">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['controller']->value;?>
/admin/"><button class="btn btn-info">Back to the admin menu</button></a>
                    </span>
                <?php }?>
                    
            </div> <!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col-md-12 -->
</div> <!-- row -->
                        
<?php
}
}
/* {/block 'content'} */
}
