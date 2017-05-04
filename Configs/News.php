<?php
$Cfg = new Core\Cfg;     
$fields = $Cfg->setDefault([
    'news_id, number',
    'news_title, text',
    'news_quote, textarea',
    'news_long, textarea_extended',
    'news_image, image',
    'category, select',
    'active, select',
    'featured, select',
    'slider_image, image',
    'slider_desc, textarea',
]);

////////////////////////////////////////////////////////////////////////////////////////

$fields['news_id']['display']['hidden'] = true;

$fields['news_title']['operations']['search'] = true;
$fields['news_title']['display']['label'] = 'Title';

$fields['news_quote']['display']['label'] = 'Short teaser';

$fields['news_long']['display']['label'] = 'News long';

$fields['news_image']['display']['label'] = 'Image';
$fields['news_image']['display']['note'] = '280 x 260 px';

$fields['category']['display']['label'] = 'Category';
$fields['category']['options'] = $Cfg->Categories();

$fields['active']['display']['label'] = 'Visibility';
$fields['active']['options'] = [
    'Inactive' => 0,
    'Active' => 1
];
$fields['featured']['operations']['search'] = true;
$fields['category']['operations']['search'] = true;
$fields['active']['operations']['search'] = true;
$fields['featured']['display']['label'] = 'Featured (slider)';
$fields['featured']['display']['note'] = 'Show in image slider.';
$fields['featured']['options'] = [
    'Not featured' => 0,
    'Featured' => 1
];

$fields['slider_image']['display']['label'] = 'Slider image';
$fields['slider_image']['display']['note'] = '400 x 1250 px';

$fields['slider_desc']['display']['label'] = 'Slider desc';

////////////////////////////////////////////////////////////////////////////////////////

return $fields;