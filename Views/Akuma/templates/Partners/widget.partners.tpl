<section id="widget-sponsors" class="tile-group display-flex flex-wrap">

{foreach $Sponsor->order($Sponsor->find(['featured = 1', 'featured_top = 1'], 4, ['partner_order DESC'])) as $partner}
    <div class="tile">
	<div class="tile-body display-flex flex-wrap flex-justify-content-center text-center">
	    <div class="img-logo">
		<a href="{$partner.partner_url}">
		    <img onerror="imgError(this);" src="{$base}Uploads/files/{$partner.partner_img}">
		</a>
	    </div>
	    <h3><a href="{$partner.partner_url}">{$partner.partner_name}</a></h3>
	    <p>{$partner.sponsor_small_desc|truncate:120}</p>
	</div>
    </div>
{/foreach}
</section>