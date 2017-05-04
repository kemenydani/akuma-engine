<?php
$Cfg = new Core\Cfg;     
$fields = $Cfg->setDefault([
    'partner_id, number',
    'partner_name, text',
	'partner_order, number',
    'partner_img, image',
	'partner_img_big, image',
    'partner_url, text',
	'sponsor_small_desc, textarea',
	'featured, select',
	'featured_top, select',
	'featured_bottom, select',
    'description, textarea',
]);

////////////////////////////////////////////////////////////////////////////////////////

$fields['partner_id']['display']['hidden'] = true;

$fields['partner_name']['operations']['search'] = true;
$fields['partner_name']['display']['label'] = 'Name';

$fields['partner_order']['display']['label'] = 'Order number';
$fields['partner_order']['display']['note'] = 'Higher number means better rank.';

$fields['sponsor_small_desc']['display']['label'] = 'Short description';

$fields['description']['display']['label'] = 'Info';

$fields['partner_img']['display']['label'] = 'Logo';

$fields['partner_img_big']['display']['label'] = 'Big image';
$fields['partner_img_big']['display']['note'] = 'For the overview page';

$fields['partner_url']['display']['label'] = 'Website';

$fields['featured']['display']['label'] = 'Featured';
$fields['featured']['options'] = [
    'Not featured' => 0,
    'Featured' => 1
];

$fields['featured_top']['display']['label'] = 'Featured top';
$fields['featured_top']['options'] = [
    'Not featured' => 0,
    'Featured' => 1
];

$fields['featured_bottom']['display']['label'] = 'Featured bottom';
$fields['featured_bottom']['options'] = [
    'Not featured' => 0,
    'Featured' => 1
];
////////////////////////////////////////////////////////////////////////////////////////

return $fields;