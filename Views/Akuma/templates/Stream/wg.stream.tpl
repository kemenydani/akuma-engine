{assign var="streams" value=$Stream->find(['active = 1'])}
<div class="panel">
    {if !empty($Stream->find(['is_live = 1']))}
    <h1 class="heading">LIVE STREAMS</h1>
    
    <ul class="ul-list" id="streams_online-wg">
	
    </ul>
    {/if}
</div>


<script>
var StreamHandler2 = function(){
    
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
    var sh2 = new StreamHandler2();
    
    console.log(streams);
    
    $.each(streams, function(index, stream) {
	
	if(stream.is_live == 1){
	    $("#streams_online-wg").append('<a href="{$base}stream/view/'+stream.stream_id+'/"><li id="stream_'+stream.stream_user+'" class="display-flex flex-directin-column flex-justify-content-space-between">'+stream.stream_title+'<span class="watchers pull-right">'+stream.viewers+' viewers</span></li></a>');
	}
	
	var now = new Date();
	var expiry = new Date(new Date(stream.last_updated).getTime() + (1 * 60 * 1000)); // inc 1 to 5

	if(expiry < now){
	    sh2.updateStream(stream);
	} else {
	    //console.log('not expired yet');
	}
	
    });

});
</script>  