{extends file="Global/_full.tpl"}
{block name=content} 
<style>
    .video-item {
        float: left; 
        position: relative;
        border-radius: 15px;
        background-color: black;
        overflow: hidden;
        width: 203px;
        height: 124px;
        
    }

    .video-item .video-over {
        background-color: #ffdf20;
        border-left: 1px solid #ffff21;
        border-top: 1px solid #ffff21;
        border-top-left-radius: 20px;
        color: black;
        width: 120px;
        position: absolute;
        right: 0px;
        height: 30px;
        line-height: 30px;
        padding-left: 15px;
        padding-right: 15px;
        overflow: hidden;
        bottom: 0px;
        z-index: 10;
    }
    
    .video-cover .video-over {
        background-color: #ffdf20;
        border-left: 1px solid #ffff21;
        border-top: 1px solid #ffff21;
        border-top-left-radius: 20px;
        color: black;
        width: 220px;
        position: absolute;
        right: 0px;
        height: 30px;
        line-height: 30px;
        padding-left: 15px;
        padding-right: 15px;
        overflow: hidden;
        bottom: 0px;
        z-index: 7;
    }
    
    
    .video-cover {
         
        position: relative;
        border-radius: 15px;
        background-color: black;
        overflow: hidden;
        width: 475px; 
        height: 265px; 
        float: left; margin-right: 15px;
        border: 1px solid #ffdf20;
        z-index: 10;
    }
     
    .video-cover img {
        width: 470px;
        height: 265px;
        border-radius: 15px;
    }
</style>
<div class="content-columns">
    
<div class="widget">
    <div class="widget-outer">
        <div class="widget-inner">
            <div class="widget-header" style="width: 94%; text-align: left;"><strong>Latest</strong> gameplay</div>
                <div class="widget-body pad-t-15 pad-l-15 pad-b-15" style="margin-right: -4px;">
             
                    {if $videos}
                    
                    {assign var=cover_thumbnail value=json_decode($videos[0].thumbnails, true)}
                    
                    <a href="{$base}video/view/{$videos[0].video_id}/{$Language->url_slug($videos[0].video_title)}">
                        <div class="video-cover" style="background-image: url('{$cover_thumbnail.medium.url}'); background-size: cover;">
                            <div style="position: absolute; z-index: 7">
                                <img style="width: 180px; height: 180px; margin-left: 140px; margin-top: 40px;" src="{$includes}Images/video_play.png">
                            </div>
                             <div class="video-over">{$videos[0].video_title}</div>
                             <div style="background-color: rgba(0, 0, 0, 0.5); position: absolute; z-index: 5; width: 100%; height: 350px;"></div>
                        </div>
                    </a>
                    
                    {for $i = 1; $i < count($videos); $i++}
                        
                        {assign var=item_thumbnail value=json_decode($videos[$i].thumbnails, true)}
                        <a href="{$base}video/view/{$videos[$i].video_id}/{$Language->url_slug($videos[$i].video_title)}">
                            <div class="video-item border-box-yellow mar-b-15 mar-r-15" style="background-image: url('{$item_thumbnail.medium.url}'); background-size: cover;">
                                <div style="position: absolute; z-index: 7">
                                    <img style="width: 50px; height: 50px; margin-left: 75px; margin-top: 30px;" src="{$includes}Images/video_play.png">
                                </div>
                                <div class="video-over">{$videos[$i].video_title}</div>
                                <div style="background-color: rgba(0, 0, 0, 0.5); position: absolute; z-index: 5; width: 100%; height: 130px;"></div>
                            </div> 
                            
                        </a>
                        
                    {/for}

                    <div class="clear"></div>
                    
                    <div class="pad-r-15" style="">
                        <span style="float: right;">
                            <a href="{$base}video/all/">
                             <button class="button button-medium rounded-4-times">+ Show all videos</button>
                            </a>
                        </span>
                    </div>
                    
                    <div class="clear"></div>
                    
                    {else}
                        <div class="message infomsg">There are no videos.</div>  
                    {/if}
                    
            </div>
        </div>
    </div>
</div>
                    
<style>
.gallery-item {
    float: left; 
    position: relative;
    border-radius: 15px;
    background-color: black;
    overflow: hidden;
    width: 203px;
    height: 124px;

}
.gallery-item .gallery-over {
    background-color: #ffdf20;
    border-left: 1px solid #ffff21;
    border-top: 1px solid #ffff21;
    border-top-left-radius: 20px;
    color: black;
    width: 40px;
    position: absolute;
    right: 0px;
    height: 30px;
    line-height: 30px;
    padding-left: 15px;
    padding-right: 15px;
    overflow: hidden;
    z-index: 7;
    bottom: 0px;
}

.gallery-cover .gallery-over {
    background-color: #ffdf20;
    border-left: 1px solid #ffff21;
    border-top: 1px solid #ffff21;
    border-top-left-radius: 20px;
    color: black;
    width: 220px;
    position: absolute;
    right: 0px;
    height: 30px;
    line-height: 30px;
    z-index: 7;
    padding-left: 15px;
    padding-right: 15px;
    overflow: hidden;
    bottom: 0px;
}


.gallery-cover {

    position: relative;
    border-radius: 15px;
    background-color: black;
    overflow: hidden;
    width: 475px; 
    height: 265px; 

    float: left; 
    border: 1px solid #ffdf20
}

#gallery_slider {
    //background-color: red;
    overflow: hidden;
    width: 4420px;
    height: 368px;
}
#gallery_slider .gallery_slide {
    width: 1137px;
    float: left;
    height: 268px;
}
.gslider_button {
    position: absolute;
    width: 200px;
    height: 268px;
    z-index: 20;
    
}
.arr_in {
    width: 60px;
    height: 268px;
    background-repeat: no-repeat;
    cursor: pointer;
}
#gallery_slider_holder .left {
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#121212+0,121212+100&1+0,0+94 */
background: -moz-linear-gradient(left,  rgba(18,18,18,1) 0%, rgba(18,18,18,0) 94%, rgba(18,18,18,0) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(left,  rgba(18,18,18,1) 0%,rgba(18,18,18,0) 94%,rgba(18,18,18,0) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right,  rgba(18,18,18,1) 0%,rgba(18,18,18,0) 94%,rgba(18,18,18,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#121212', endColorstr='#00121212',GradientType=1 ); /* IE6-9 */

}
#gallery_slider_holder .right {
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#121212+0,121212+100&0+6,1+100 */
background: -moz-linear-gradient(left,  rgba(18,18,18,0) 0%, rgba(18,18,18,0) 6%, rgba(18,18,18,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(left,  rgba(18,18,18,0) 0%,rgba(18,18,18,0) 6%,rgba(18,18,18,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right,  rgba(18,18,18,0) 0%,rgba(18,18,18,0) 6%,rgba(18,18,18,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00121212', endColorstr='#121212',GradientType=1 ); /* IE6-9 */

}
</style>
<div class="clear"></div><br>
<div class="widget">
    <div class="widget-outer">
        <div class="widget-inner">
            <div class="widget-header" style="width: 94%; text-align: left;"><strong>Media</strong> archive</div>
            <div class="widget-body pad-t-15 pad-l-15 pad-b-15" style="margin-right: -4px;">
                <div id="gallery_slider_holder" style="overflow: hidden; position: relative; width: 1137px; height: 268px;">
                    
                    <div class="gslider_button left" onclick="rotator.previous();" id="left_arr" style="left: 0;">
                        <div class="arr_in" style="background-image: url('{$includes}Images/rotator-prev-arrow.png');float: left; background-position: left center;"></div>
                    </div>   
                    <div class="gslider_button right" onclick="rotator.next();" id="right_arr" style="right: 0">
                        <div class="arr_in" style="background-image: url('{$includes}Images/rotator-next-arrow.png');float: right; background-position: right center;"></div>
                    </div> 
                    
                <div id="gallery_slider">
                    
                {foreach $galleries as $gallery}
                    
                    
                    <div class="gallery_slide">

                        <a href="{$base}gallery/view/{$gallery.gallery_id}/{$Language->url_slug($gallery.gallery_name)}">
                            <div class="gallery-cover" style="background-image: url('{$base}{$gallery.img.cover.thumb}'); background-size: cover;">
                                <div style="position: absolute; z-index: 7">
                                    <img style="width: 180px; height: 180px; margin-left: 140px; margin-top: 40px;" src="{$includes}Images/photo_cover.png">
                                </div>
                                <div class="gallery-over">{$gallery.gallery_name}</div> 
                                <div style="background-color: rgba(0, 0, 0, 0.5); position: absolute; z-index: 5; width: 100%; height: 350px;"></div>
                            </div>
                        </a>

                        {for $i = 0; $i < 6; $i++}

                            <a href="{$base}gallery/view/{$gallery.gallery_id}/{$Language->url_slug($gallery.gallery_name)}">   
                                <div style="background-image: url('{$base}{$gallery.img.highlighted[$i].thumb}'); background-size: cover;" class="gallery-item border-box-yellow mar-b-15 mar-l-15">
                                    <div style="position: absolute; z-index: 7">
                                        <img style="width: 50px; height: 50px; margin-left: 75px; margin-top: 30px;" src="{$includes}Images/image_highlighted.png">
                                    </div>
                                    <div class="gallery-over">IMAGE</div>
                                    <div style="background-color: rgba(0, 0, 0, 0.5); position: absolute; z-index: 5; width: 100%; height: 130px;"></div>
                                </div>
                            </a>    

                        {/for}

                        <div class="clear"></div>


                   
                                
                    </div><!-- SLIDER SLIDE -->
                {/foreach}

                </div>
                </div>
                <!-- SLIDER -->
                <div class="clear"></div> 
                                        <div class="pad-r-15 mar-t-15" style="">
                            <span style="float: right;">
                                <a href="{$base}gallery/all/">
                                <button class="button button-medium rounded-4-times">+ Show all galleries</button>
                                </a>
                            </span>
                        </div>
                <div class="clear"></div> 
                
            </div>
        </div>
    </div>
</div>

<div class="clear"></div> 

</div>
<script type="text/javascript">
function rotator(options){
    
    var self = this;
    this.o = options;
    
    this.current = 1;
    this.total = this.o.slides.length;
    this.speed = 5000;
    
    this.total_width = this.o.slide_container.offsetWidth * this.total;
    this.rotator_width = this.o.slide_container.offsetWidth;
    
    this.margin = 0;
    
    //$(this.o.controls[0]).addClass('rotator-nav-item-active');
    
    this.slide = function(){
        
        //$(this.o.controls).removeClass('rotator-nav-item-active');
        
        if((this.current < this.total) && (this.current >= 0)){
            
            this.margin = -(1137 * this.current) + 'px';
            $(this.o.slide_container).animate({ marginLeft: this.margin }, 300);
            
            //$(this.o.controls[this.current]).addClass('rotator-nav-item-active');
            
            this.current++;
        } else {
            
            this.margin = 0 + 'px';
            $(this.o.slide_container).animate({ marginLeft: this.margin }, 300);
            
            this.current = 1;
            //$(this.o.controls[0]).addClass('rotator-nav-item-active');
        }
        
    }, 
    
    this.next = function(){
        
        this.slide();
        
        clearInterval(this.rotate);
        this.startRotate();
        
    },
            
    this.previous = function(){
        
        this.current-=2;
        this.slide();
        
        clearInterval(this.rotate);
        this.startRotate();
        
        
    },
    
    this.startRotate = function(){
         this.rotate = setInterval(function(){ 
             self.slide();
         }, this.speed); 
    }
}   

var options = {
    'rotator' : document.getElementById('gallery_slider_holder'),
    'slide_container' : document.getElementById('gallery_slider'),
    'slides' : document.getElementsByClassName('gallery_slide')
    //'controls' : document.getElementsByClassName('rotator-nav-item')
};

var rotator = new rotator(options);
            // rotator.slide();
             rotator.startRotate();
/*            
setInterval(function(){ 
   rotator.slide();
}, 6000);
*/
</script>
                
                
                
{/block}

{block name=block}
<div class="pad-b-15">
    {widget name=match dir="Matches" limit=5}
</div>
{/block}