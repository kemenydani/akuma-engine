{extends file="Global/Block.tpl"} 

{block name=content} 
    
<h1 class="heading">STREAMS</h1>
<div class="panel">
    
    <h2 class="heading">ONLINE STREAMS</h2>
    <ul class="ul-list" id="streams_online">
	
    </ul>
    <br>
    <h2 class="heading">OFFLINE STREAMS</h2>
    <ul class="ul-list" id="streams_offline">
	
    </ul>
  {*  
    
    {if $streams}
	<ul class="ul-list">
	{foreach $streams as $stream}
	    <li class="display-flex flex-directin-column flex-justify-content-space-between">
		 <a href="{$base}stream/view/{$stream.stream_id}/{$Language->url_slug($stream.stream_user)}">{$stream.stream_user}</a>
		<button id="live-button" class="flex-self-align-center {if $stream.is_live === 1}button-success{/if}">{if $stream.is_live}Live{else}Offline{/if}</button>
	    </li>
	{/foreach}
	</ul>
    {else}
	<div class="msg info">There are no active streams.</div>
    {/if}
    
    {include file="Global/page.tpl" url='stream/all/' total=$total pages=$pages current=$current}
    *}
</div>
    
{if $streams}   
  
<script>
var StreamHandler = function(){
    
    var self = this;
    self.deferreds = [];
    
    this.fetchTwitchData = function (path){

	var promise = 
	$.ajax({
	    type: 'GET',
	    headers: {
		'Client-ID': 'g6afu82yxxroykga3cy2kmfmqsdrtkf'
	    },
	    dataType: "json",
	    url: path
	});
	self.deferreds.push(promise);
	return promise;
	
    },
    
    this.postDetails = function(data, id){
	
	var promise = 
	$.ajax({
	    type: 'POST',
	    dataType: "json",
	    data: data,
	    url: "{$base}stream/update/"+id
	});
	self.deferreds.push(promise);
	return promise;
	
    },
    
    this.updateStream = function(stream){

	this.fetchTwitchData("https://api.twitch.tv/kraken/streams/" + stream.stream_user).done(function(twitch_response){

	    if (twitch_response.stream !== null){
		
		self.postDetails({
		    'viewers': twitch_response.stream.viewers,
		    'is_live': 1
		}, stream.stream_user);
		
	    }
	    
	    if(stream.is_live == 0 || twitch_response.stream === null) {
		self.postDetails({
		    'viewers': 0,
		    'is_live': 0
		}, stream.stream_user);
	    }
	    
	}).fail(function(xhr, status, error){
	    
	});
	
    }
	
};
    
    
$(document).ready(function(){

    var streams = $.parseJSON(JSON.stringify({json_encode($streams)}));
    var sh = new StreamHandler();
    
    $.each(streams, function(index, stream) {
	
	if(stream.is_live == 1){
	    $("#streams_online").append('<a href="{$base}stream/view/'+stream.stream_id+'/"><li id="stream_'+stream.stream_user+'" class="display-flex flex-directin-column flex-justify-content-space-between">'+stream.stream_title+'<span class="watchers pull-right">'+stream.viewers+' viewers</span><button id="live-button" class="flex-self-align-center button-success">Live</button></li></a>');
	} else {
	    $("#streams_offline").append('<a href="{$base}stream/view/'+stream.stream_id+'/"><li class="display-flex flex-directin-column flex-justify-content-space-between">'+stream.stream_title+'</li></a>');
	}
	
	var now = new Date();
	var expiry = new Date(new Date(stream.last_updated).getTime() + (1 * 60 * 1000)); // inc 1 to 5

	if(expiry < now){
	    sh.updateStream(stream);
	} else {
	    //console.log('not expired yet');
	}
	
    });

});
</script>  

{/if} 
    
{/block}

{block name=block}
         {include file='Global/FacebookWidget.tpl'}
     <br>
     <br>
     {widget name=match dir="Matches" heading=true limit=5}
     <br>
     <br>
     {include file='Adv/Advertisement_aside.tpl'}
{/block}

{block name=pagination}
    {include file="Global/pagination.tpl" url='stream/all/' total=$total pages=$pages current=$current}
{/block}