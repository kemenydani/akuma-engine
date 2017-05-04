<?php
$Cfg = new Core\Cfg;     
$fields = $Cfg->setDefault([
    'adv_id, number',
    'adv_name, text',
    'adv_img, image',
    'adv_url, text',
	'display_location, select',
	'active, select',
]);

////////////////////////////////////////////////////////////////////////////////////////

$fields['adv_id']['display']['hidden'] = true;

$fields['adv_name']['operations']['search'] = true;
$fields['adv_name']['display']['label'] = 'Name';

$fields['adv_img']['display']['label'] = 'Banner';

$fields['adv_url']['display']['label'] = 'Adv. url';

$fields['display_location']['display']['label'] = 'Display location';
$fields['display_location']['options'] = [
    'Page aside widget' => 'aside',
    'Home widget' => 'home'
];

$fields['active']['display']['label'] = 'Active';
$fields['active']['options'] = [
    'Inactive' => 0,
    'Active' => 1
];
////////////////////////////////////////////////////////////////////////////////////////

return $fields;