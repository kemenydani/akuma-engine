{extends file="Admin/_full.tpl"}
{block name=content}

<div class="row"> 
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">
                <iframe  width="100%" id="theframe" height="700px" frameborder="0" src="{$base}Core/Assets/ResponsiveFileUploader/dialog.php?type=0&lang=en_EN"></iframe>
                <script>
                    var _theframe = document.getElementById("theframe");
                    _theframe.contentWindow.location.href = _theframe.src;
                </script>
            </div>
        </div>               
    
    </div>      
</div> 

{/block}