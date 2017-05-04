<?php
$Cfg = new Core\Cfg;     
$fields = $Cfg->setDefault([
    'gallery_id, number',
    'gallery_name, text',
    'description, textarea',
    'folder, select',
	'headline_image, image',
    'active, select',
    'featured, select'
]);

////////////////////////////////////////////////////////////////////////////////////////

$fields['gallery_id']['display']['hidden'] = true;

$fields['gallery_name']['operations']['search'] = true;
$fields['gallery_name']['display']['label'] = 'Title';

$fields['folder']['display']['label'] = 'Folder';
$fields['folder']['display']['note'] = 'Choose the folder, where the images are located. You can choose only one folder for that gallery, so be sure that all images within this gallery are in the same folder.';
$fields['folder']['options'] = $Cfg->Folders('Uploads/files/MODULES/Albums/');

$fields['headline_image']['display']['label'] = 'Headline image';
$fields['headline_image']['display']['note'] = 'This will be the main image which represents the whole gallery.';

$fields['description']['display']['label'] = 'Description';

$fields['active']['display']['label'] = 'Visibility';
$fields['active']['options'] = [
    'Inactive' => 0,
    'Active' => 1
];
$fields['featured']['operations']['search'] = true;
$fields['featured']['display']['label'] = 'Featured';
$fields['featured']['options'] = [
    'Not featured' => 0,
    'Featured' => 1
];

////////////////////////////////////////////////////////////////////////////////////////

return $fields;