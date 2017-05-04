{extends file="Global/_full.tpl"}

{block name=content}
<section id="content">
    <br><br>
    <h1 class="heading">EDIT THREAD</h1>

    <div class="container">
        {if $user}
            {if !isset($success)}

                    <form method="POST" class="form-cust" action="{$base}forum/edit_thread/{$thread.thread_id}/">

                        <div class="field display-flex flex-flow-col">
                            <label class="heading heading-small">Title:</label>
                            <input class="flex-1" type="text" value="{if $post} {$post.thread_title} {else} {$thread.thread_title} {/if}" name="thread_title" placeholder="Title">
                            {if $errors.thread_title}
                                <ul class="msg error">
                                    {foreach $errors.thread_title as $error}
                                        <li>{$error}</li>
                                    {/foreach}
                                </ul>
                            {/if}
                        </div>

                        <div class="field display-flex flex-flow-col">
                            <label class="heading heading-small">Content:</label>
                            <textarea class="flex-1" style="min-height: 260px" id="thread_text" name="thread_text">{if $post} {$post.thread_text} {else} {$thread.thread_text} {/if}</textarea>
                            {if $errors.thread_text}
                                <ul class="msg error">
                                    {foreach $errors.thread_text as $error}
                                        <li>{$error}</li>
                                    {/foreach}
                                </ul>
                            {/if}
                        </div>

                        <br>
                        <center><button class="button button-dark button-big" type="submit">Update</button></center>
                        <br>
                    </form>

            {else}
                <center>The topic has been succesfully updated!</center>
                <br>
            {/if}
        {else}
            Please log in to create thread.
        {/if}
    </div>
</section>

<script type="text/javascript" src="{$includes}libs/tinymce/tinymce.min.js"></script>
{literal}
<script type="text/javascript">
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
</script>
{/literal}
{/block}