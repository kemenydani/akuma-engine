<?php
$Cfg = new Core\Cfg;     

$fields = $Cfg->setDefault([
    'setting_id, number',
    'setting_name, text',
	'variable_name, text',
	'setting_value, text'
]);

////////////////////////////////////////////////////////////////////////////////////////

$fields['setting_id']['display']['hidden'] = true;

$fields['setting_name']['operations']['search'] = true;
$fields['setting_name']['display']['label'] = 'Alias';

$fields['variable_name']['operations']['search'] = true;
$fields['variable_name']['display']['label'] = 'Variable name';

$fields['setting_value']['operations']['search'] = true;
$fields['setting_value']['display']['label'] = 'Value';

////////////////////////////////////////////////////////////////////////////////////////

return $fields;