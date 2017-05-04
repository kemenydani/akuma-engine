<?php
/* Smarty version 3.1.30, created on 2017-05-01 09:21:36
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Admin\_category_item_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5906fe20dadcb7_19076608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c535207368b1f89082d81503da4e4d246fc4a2b' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Admin\\_category_item_list.tpl',
      1 => 1493624515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Admin/_full.tpl' => 1,
    'file:Admin/_filter_list_bar.tpl' => 1,
    'file:Admin/_alert_dialog.tpl' => 1,
    'file:Global/pagination.tpl' => 1,
  ),
),false)) {
function content_5906fe20dadcb7_19076608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_268835906fe20da26e3_98517905', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206085906fe20dacf44_24166746', 'pagination');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Admin/_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_268835906fe20da26e3_98517905 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender("file:Admin/_filter_list_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fields'=>$_smarty_tpl->tpl_vars['fields']->value,'search'=>true,'order'=>true), 0, false);
?>

 
<div class="panel panel-default">
    <div class="panel-body">

	<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['controller']->value;?>
/manage/" class="form-inline form-group-sm">
	    <div class="">
		<span class="pull-left">
		    <div class="form-group">
			<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['controller']->value;?>
/add/"><button type="button" class="btn btn-success btn-sm">Add new</button></a>
		    </div>
		</span>
		
		<div class="clearfix"></div>
	    </div>
	    <hr>

	<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
	<table class="table table-responsive table-condensed">
	    <thead>
	      <tr>
		<th width="2%">#</th>
		<?php if ($_smarty_tpl->tpl_vars['table']->value) {?>
		    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->tpl_vars['i']->value < count($_smarty_tpl->tpl_vars['table']->value)) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < count($_smarty_tpl->tpl_vars['table']->value); $_smarty_tpl->tpl_vars['i']->value++) {
?>
			<?php if ($_smarty_tpl->tpl_vars['table']->value[$_smarty_tpl->tpl_vars['i']->value]) {?><th width=""><?php if ($_smarty_tpl->tpl_vars['table']->value[$_smarty_tpl->tpl_vars['i']->value]['title']) {
echo $_smarty_tpl->tpl_vars['table']->value[$_smarty_tpl->tpl_vars['i']->value]['title'];
}?></th><?php }?>
		    <?php }
}
?>

		<?php }?>
		<th width="" style="text-align: right">

		    <div class="checkbox">
			<label>
			     <input class="pull-right" id="select_all" type="checkbox"> 
			</label>
		    </div>

		</th>
		<th width="10%"></th>
	      </tr>
	    </thead>

	    <tbody>
	      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->index++;
$__foreach_item_0_saved = $_smarty_tpl->tpl_vars['item'];
?> 
	      <tr class="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['active']) && $_smarty_tpl->tpl_vars['item']->value['active'] == 0) {?>active<?php }?>">
		<td><?php echo $_smarty_tpl->tpl_vars['item']->index+1;?>
</td>

		<?php if ($_smarty_tpl->tpl_vars['table']->value) {?>
		    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->tpl_vars['i']->value < count($_smarty_tpl->tpl_vars['table']->value)) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < count($_smarty_tpl->tpl_vars['table']->value); $_smarty_tpl->tpl_vars['i']->value++) {
?>
			<?php if ($_smarty_tpl->tpl_vars['table']->value[$_smarty_tpl->tpl_vars['i']->value]) {?><td width=""><?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['table']->value[$_smarty_tpl->tpl_vars['i']->value]['key']] != null) {
echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['table']->value[$_smarty_tpl->tpl_vars['i']->value]['key']];
} else { ?>n/a<?php }?></td><?php }?>
		    <?php }
}
?>

		<?php }?>


		<td style="text-align: right;"><input value="<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
" name="choosen[<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
]" type="checkbox"></td>
		<td>
		    <span class="pull-right">

			<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['controller']->value;?>
/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
/" style="text-decoration: none;">
			    <button type="button" class="btn btn-default btn-xs">
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
			    </button>
			</a>
			<!-- END delete button modal dialog -->

		    </span>
		</td>

	      </tr>
	      <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved;
}
} else {
?>

		      <?php $_smarty_tpl->_assignInScope('error', "There are no services");
?>
	      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	    </tbody>
	</table>
	<?php } else { ?>
	    <div class="alert alert-info" role="alert"><b>Empty:</b> This module is empty, or your search returned without any results.</div>
	<?php }?>
	</form>



    </div>
</div>
    
    <!-- extension for alert messages -->           
    <?php $_smarty_tpl->_subTemplateRender("file:Admin/_alert_dialog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <!-- toogle all checkboxes on page -->  
    <?php echo '<script'; ?>
 language="JavaScript">
    $('#select_all').click(function(event) {
        if(this.checked) {
            // Iterate each checkbox
            $(':checkbox').each(function() {
                this.checked = true;
            });
        }
        else {
          $(':checkbox').each(function() {
                this.checked = false;
            });
        }
    });
    <?php echo '</script'; ?>
>
    
<?php
}
}
/* {/block 'content'} */
/* {block 'pagination'} */
class Block_206085906fe20dacf44_24166746 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <?php if ($_smarty_tpl->tpl_vars['pagination']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:Global/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('url'=>$_smarty_tpl->tpl_vars['method_url']->value,'searchurl'=>$_smarty_tpl->tpl_vars['searchurl']->value,'details'=>$_smarty_tpl->tpl_vars['pagination']->value), 0, false);
?>

    <?php }?>
    
<?php
}
}
/* {/block 'pagination'} */
}
