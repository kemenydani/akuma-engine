<?php
$Cfg = new Core\Cfg;     
$fields = $Cfg->setDefault([
    'download_id, number',
    'download_name, text',
	'category, select',
	'download_desc, textarea',
    'file_path, file',
    'active, select',
]);

////////////////////////////////////////////////////////////////////////////////////////

$fields['download_id']['display']['hidden'] = true;

$fields['download_name']['display']['label'] = 'File name';
$fields['download_name']['operations']['search'] = true;
$fields['download_name']['operations']['order'] = true;

$fields['description']['display']['label'] = 'Description';

$fields['file_path']['display']['label'] = 'File Path';

$fields['category']['display']['label'] = 'Category';
$fields['category']['options'] = $Cfg->Categories();

$fields['active']['display']['label'] = 'Visibility';
$fields['active']['options'] = [
    'Inactive' => 0,
    'Active' => 1
];

////////////////////////////////////////////////////////////////////////////////////////

return $fields;