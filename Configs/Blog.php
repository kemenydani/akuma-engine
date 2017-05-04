<?php
$Cfg = new Core\Cfg;     
$fields = $Cfg->setDefault([
	'blog_id, number',
	'blog_title, text',
	'blog_quote, textarea',
	'blog_content, textarea_extended',
	'blog_image, image',
	'active, select'
]);

////////////////////////////////////////////////////////////////////////////////////////

$fields['blog_id']['display']['hidden'] = true;

$fields['blog_title']['operations']['search'] = true;
$fields['blog_title']['display']['label'] = 'Title';

$fields['blog_quote']['display']['label'] = 'Short teaser';

$fields['blog_content']['display']['label'] = 'Blog content';

$fields['blog_image']['display']['label'] = 'Image';
$fields['blog_image']['display']['note'] = 'Accepted size: 280 x 260 px, if the user provided an image, please copy the link from this field and upload it on the avenue filesystem troug the filemanager. ';

$fields['active']['display']['label'] = 'Visibility';
$fields['active']['options'] = [
    'Inactive' => 0,
    'Active' => 1
];

////////////////////////////////////////////////////////////////////////////////////////

return $fields;