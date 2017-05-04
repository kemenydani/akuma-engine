<?php
/* Smarty version 3.1.30, created on 2017-05-01 10:59:20
  from "E:\_WORKSPACE_\_WAMP_ROOT\_WWW\akuma\Views\Akuma\templates\Forum\_edit_topic.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590715081bb118_42394979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '257a54d8c4ea4b9f12f773c78c076db5755c8f46' => 
    array (
      0 => 'E:\\_WORKSPACE_\\_WAMP_ROOT\\_WWW\\akuma\\Views\\Akuma\\templates\\Forum\\_edit_topic.tpl',
      1 => 1492527640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Global/_full.tpl' => 1,
  ),
),false)) {
function content_590715081bb118_42394979 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18310590715081b9a19_10220134', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Global/_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_18310590715081b9a19_10220134 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="content">
    <br><br>
    <h1 class="heading">EDIT THREAD</h1>

    <div class="container">
        <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
            <?php if (!isset($_smarty_tpl->tpl_vars['success']->value)) {?>

                    <form method="POST" class="form-cust" action="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
forum/edit_thread/<?php echo $_smarty_tpl->tpl_vars['thread']->value['thread_id'];?>
/">

                        <div class="field display-flex flex-flow-col">
                            <label class="heading heading-small">Title:</label>
                            <input class="flex-1" type="text" value="<?php if ($_smarty_tpl->tpl_vars['post']->value) {?> <?php echo $_smarty_tpl->tpl_vars['post']->value['thread_title'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['thread']->value['thread_title'];?>
 <?php }?>" name="thread_title" placeholder="Title">
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value['thread_title']) {?>
                                <ul class="msg error">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value['thread_title'], 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
                                        <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </ul>
                            <?php }?>
                        </div>

                        <div class="field display-flex flex-flow-col">
                            <label class="heading heading-small">Content:</label>
                            <textarea class="flex-1" style="min-height: 260px" id="thread_text" name="thread_text"><?php if ($_smarty_tpl->tpl_vars['post']->value) {?> <?php echo $_smarty_tpl->tpl_vars['post']->value['thread_text'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['thread']->value['thread_text'];?>
 <?php }?></textarea>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value['thread_text']) {?>
                                <ul class="msg error">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value['thread_text'], 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
                                        <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </ul>
                            <?php }?>
                        </div>

                        <br>
                        <center><button class="button button-dark button-big" type="submit">Update</button></center>
                        <br>
                    </form>

            <?php } else { ?>
                <center>The topic has been succesfully updated!</center>
                <br>
            <?php }?>
        <?php } else { ?>
            Please log in to create thread.
        <?php }?>
    </div>
</section>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['includes']->value;?>
libs/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
    tinymce.init({
        selector: "#thread_text",
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor"
        ],
        //content_css : "{$etcDir}tinymce/custom_tinymce.css",
        toolbar: " insertfile undo redo | styleselect | fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
        fontsize_formats: "8px 10px 12px 14px 18px 24px 36px",
        content_style: ".mce-content-body {font-size:15px;font-family:Arial,sans-serif;}",
        setup: function (editor) {
            editor.on('change', function () {
                editor.save();
            });
        }
    });
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'content'} */
}
