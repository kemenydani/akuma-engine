<?php

$Cfg = new Core\Cfg;     
$fields = $Cfg->setDefault([
	'category_id, number',
	'category_name, text',
	'category_short, text',
	'category_group, text',
	'category_image, image',
]);

////////////////////////////////////////////////////////////////////////////////////////

$fields['category_id']['display']['hidden'] = true;

$fields['category_name']['display']['label'] = 'Name';
$fields['category_name']['operations']['search'] = true;

$fields['category_short']['display']['label'] = 'Short name';

$fields['category_group']['display']['label'] = 'Group';
$fields['category_group']['operations']['search'] = true;

$fields['category_image']['display']['label'] = 'Category icon';

////////////////////////////////////////////////////////////////////////////////////////

return $fields;