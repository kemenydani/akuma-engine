<h1 class="heading">POWERED BY</h1>

<div class="tile-group display-flex flex-wrap neg-margin-15">
    
    <div class="tile fb-tile">
	<div class="content tile-body display-flex flex-directin-column flex-wrap flex-justify-content-center text-center">
	    <div style="width: 100%">
		<h1>FACEBOOK</h1>
	    </div>
	    <div style="width: 100%">
	    <p>
		<div class="fb-like" data-href="https://www.facebook.com/VenkoGaming/?fref=ts" data-layout="box_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
	    </p>
	    </div>
	    <div style="width: 100%">
	    <h4>Like us on Facebook</h4>
	    </div>
	</div>
    </div> 
    
    {foreach $Sponsor->order($Sponsor->find(['featured = 1', 'featured_bottom = 1'], 2, ['partner_order DESC'])) as $sponsor}
	<div class="tile t-border ">
	    <div class="tile-body display-flex flex-directin-row flex-wrap flex-justify-content-center text-center">
		<div class="img-logo">
		    <a href="{$sponsor.partner_url}"><img onerror="imgError(this);" src="{$base}Uploads/files/{$sponsor.partner_img}"></a>
		</div>
		<h3 class="title"><a href="{$sponsor.partner_url}">{$sponsor.partner_name}</a></h3>
		<p class="quote">{$sponsor.sponsor_small_desc|truncate:120}</p>
	    </div>
	</div>
    {/foreach}
    
    <div class="tile tw-tile tile-body display-flex flex-directin-row flex-wrap flex-justify-content-center text-center">
	<div class="content tile-body display-flex flex-directin-column flex-wrap flex-justify-content-center text-center">
	    <div style="width: 100%">
	    <h1>TWITTER</h1>
	    </div>
	    <div style="width: 100%">
	    <p>
		<a href="https://twitter.com/Venko_Gaming" class="twitter-follow-button" data-size="large" data-show-screen-name="false" data-lang="en" data-show-count="true">Follow @Venko_Gaming</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	    </p>
	    </div>
	    <div style="width: 100%">
	    <h4>Follow us on twitter</h4>
	    </div>
	</div>
    </div> 
    
</div>