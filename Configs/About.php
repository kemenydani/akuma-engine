<?php
$Cfg = new Core\Cfg;     
$fields = $Cfg->setDefault([
    'about_id, number',
    'about_short, textarea',
    'about_long, textarea_extended',
]);

////////////////////////////////////////////////////////////////////////////////////////

$fields['about_id']['display']['hidden'] = true;

$fields['about_short']['display']['label'] = 'Short text (footer)';

$fields['about_long']['display']['label'] = 'Long text';

////////////////////////////////////////////////////////////////////////////////////////

return $fields;