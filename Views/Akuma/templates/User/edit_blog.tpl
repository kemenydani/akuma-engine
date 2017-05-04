{extends file="Global/block.tpl"} 

{if $error}
    <div class="alert alert-info">{$error}</div>
{/if}


{block name=content} 
     <style>
         
        .form {
        }
         
        .field {
            margin-bottom: 4px;
            //background-color: #141414;
            //border-bottom: 1px dashed #242424;
        }
        .field input[type=text], input[type=email], input[type=password], select {
            background: black;
            border: 1px solid #242424;
            font-size: 13px;
            height: 25px;
            line-height: 25px;
            padding-left: 7px;
            padding-right: 7px;
            width: 98%;
        }
        
        textarea {
            background: black;
            border: 1px solid #242424;
            font-size: 13px;
            resize: vertical;
        }
        
        .field label {
            display: inline-block;
            font-size: 13px;
            width: 150px;
            color: #ffdf20;
            font-weight: bold;
            height: 25px; line-height: 25px;
            text-transform: uppercase;
        }
        .form-error {
            margin-top: 5px;
            margin-bottom: 10px;
           width: 100%;
           font-size: 12px;
           background-color: #802420;
        }
        .form-error ul {
        list-style-type: none;
        padding: 0px;
        margin: 0px;
        padding: 5px;
        }
        
        
    </style>   

    <script type="text/javascript" src="{$etcDir}tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "#blog_content",
   skin: "tundora",
    plugins: [
        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
    ],
    content_css : "{$etcDir}tinymce/custom_tinymce_dark.css",
    toolbar: "undo redo | styleselect | fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image ", 
    fontsize_formats: "8px 10px 12px 14px 18px 24px 36px",
    setup: function (editor) {
        editor.on('change', function () {
            editor.save();
        });
    }
});
</script>                    

<div class="widget">
    <div class="widget-outer">
        <div class="widget-inner">
            <div class="widget-header">new<strong> blog post</strong></div>
            <div class="widget-body">
                
                <div style="">
                    {if !isset($success)}
                        
                    <form action="{$base}user/editblog/{$item.blog_id}/" method="POST">
                    <div class="field">
                            <label>Blog post title:</label>
                            <input type="text" {if $errors.blog_title}style="border: 1px solid #802420;"{/if} value="{$item.blog_title}" name="blog_title" placeholder="Title">
                            {if $errors.blog_title}
                            <div class="form-error">
                                <span style="">
                                    <ul>
                                    {foreach $errors.blog_title as $error}
                                        <li>{$error}</li>
                                    {/foreach}
                                    </ul>
                                </span>
                            </div>
                            {/if}
                    </div>
                    <br>
                    <div class="field">
                            <label>Blog image link 278x310:</label>
                             <p style="color: #555">Provide the link of your blog image the admins will upload the image on our local storage when they accept your post.</p>
                            <input type="text" {if $errors.blog_image}style="border: 1px solid #802420;"{/if} value="{$item.blog_image}" name="blog_image" placeholder="Blog image">
                            {if $errors.blog_image}
                            <div class="form-error">
                                <span style="">
                                    <ul>
                                    {foreach $errors.blog_image as $error}
                                        <li>{$error}</li>
                                    {/foreach}
                                    </ul>
                                </span>
                            </div>
                            {/if}
                    </div>
                    <br>
                    <div class="field">
                            <label>SHORT TEASER:</label>
                        <textarea name="blog_quote" style="width: 99%; height: 60px;">{$item.blog_quote}</textarea>
                    </div><br>
                    <div class="field">
                            <label>BLOG CONTENT:</label>
                    <textarea id="blog_content" name="blog_content" style="width: 99%; height: 200px;">{$item.blog_content}</textarea>
                    </div>
                    <input type="hidden" name="user_id" value="{$item.user_id}">
                    <input type="hidden" name="active" value="0">
           
                    <center><input class="button button-big rounded-4-times" value="POST" type="submit"></center>
                    
                    </form>  
                    {else}
                        <div style="font-size: 12px; background-color: #22B573; padding: 5px; border-radius: 4px;">The post has been succesfully edited, but you have to wait for the administrators to activate your post.</div><br>
                    {/if}
                </div>
                
                
                
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div> 

     
{/block}

{block name=block}
        <div class="pad-b-15">
        {widget name=news dir="Widgets" limit=5}
    </div>
<div class="pad-b-15">
    {widget name=match dir="Matches" limit=5}
</div>
{/block}