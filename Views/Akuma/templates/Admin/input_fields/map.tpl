<div class="form-group">

<label class="control-label col-sm-1" for="field_{$name}">{$details.display.label}</label>
    <div class="col-sm-11">

        <div class="col-lg-12">
            <div class="row" id="map-item-container"> 
                {if !$value}
                <div class="map-item col-lg-12 row" style="margin-bottom: 5px;">
                    <div class="pull-left" style="margin-right: 15px;">
                        <input name="map[][name]" class="form-control" placeholder="Map name" type="text">
                    </div>
                    <div class="pull-left" style="margin-right: 15px;">
                        <input name="map[][home_score]" class="form-control" placeholder="Home score" type="number">
                    </div>
                    <div class="pull-left" style="margin-right: 15px;">
                        <input name="map[][enemy_score]" class="form-control" placeholder="Enemy score" type="number">
                    </div>
                    <button type="button" onclick="removeMapItem(this);" class="btn btn-sm btn-default pull-left"><span class="glyphicon glyphicon-minus"></span></button>
                </div>
                {else}
                    {assign var="arr" value=json_decode($value,true)}

                    {for $i = 0; $i < count($arr); $i++}
                        
                    <div class="map-item col-lg-12 row" style="margin-bottom: 5px;">
                        <div class="pull-left" style="margin-right: 15px;">
                            <input name="map[][name]" value="{$arr[$i].name}" class="form-control" placeholder="Map name" type="text">
                        </div>
                        <div class="pull-left" style="margin-right: 15px;">
                            <input name="map[][home_score]" value="{$arr[$i].home_score}" class="form-control" placeholder="Home score" type="number">
                        </div>
                        <div class="pull-left" style="margin-right: 15px;">
                            <input name="map[][enemy_score]" value="{$arr[$i].enemy_score}" class="form-control" placeholder="Enemy score" type="number">
                        </div>
                        <button type="button" onclick="removeMapItem(this);" class="btn btn-sm btn-default pull-left"><span class="glyphicon glyphicon-minus"></span></button>
                    </div>
                        
                    {/for}
                {/if}
            </div>
            
            <div class="row">
                <br><button onclick="addMapItem();" type="button" class="btn btn-sm btn-default">Add map <span class="glyphicon glyphicon-plus"></span></button>
            </div>
        </div>
        
            
        <div class="col-lg-6">
            <div class="row">
                {if $details.display.note}
                    <p class="help-block"><small>{$details.display.note}</small></p>
                {/if}
            </div>
        </div>
        
    </div>
</div>
            
<template id="map-item">
    <div class="map-item col-lg-12 row" style="margin-bottom: 5px;">
        <div class="pull-left" style="margin-right: 15px;">
            <input name="map[][name]" class="form-control" placeholder="Map name" type="text">
        </div>
        <div class="pull-left" style="margin-right: 15px;">
            <input name="map[][home_score]" class="form-control" placeholder="Home score" type="number">
        </div>
        <div class="pull-left" style="margin-right: 15px;">
            <input name="map[][enemy_score]" class="form-control" placeholder="Enemy score" type="number">
        </div>
        <button type="button" onclick="removeMapItem(this);" class="btn btn-sm btn-default pull-left"><span class="glyphicon glyphicon-minus"></span></button>
    </div>
</template>
            
<script>
    function addMapItem(){
        $("#map-item-container").append($("#map-item").html());
    }
    function removeMapItem(self){
        var ele = $(self).parent();
        ele.remove();
    }
</script>
<!-- field end -->