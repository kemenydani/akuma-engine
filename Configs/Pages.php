<?php
$Cfg = new Core\Cfg;     
$fields = $Cfg->setDefault([
    'page_id, number',
    'page_name, text',
    'page_title, text',
    'page_content, textarea_extended',
    'active, select'
]);

////////////////////////////////////////////////////////////////////////////////////////

$fields['page_id']['display']['hidden'] = true;

$fields['page_name']['operations']['search'] = true;
$fields['page_name']['display']['label'] = 'Name';

$fields['page_title']['operations']['search'] = true;
$fields['page_title']['display']['label'] = 'Title';

$fields['page_content']['display']['label'] = 'Content';

$fields['active']['display']['label'] = 'Visibility';
$fields['active']['options'] = [
    'Inactive' => 0,
    'Active' => 1
];

////////////////////////////////////////////////////////////////////////////////////////

return $fields;