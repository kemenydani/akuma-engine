<?php
$Cfg = new Core\Cfg;     
$fields = $Cfg->setDefault([
    'forum_id, number',
    'forum_title, text',
    //'description, textarea',
    //'active, select',
]);

////////////////////////////////////////////////////////////////////////////////////////

$fields['forum_id']['display']['hidden'] = true;
$fields['forum_title']['display']['label'] = 'Title';
$fields['forum_title']['operations']['search'] = true;
$fields['forum_title']['operations']['order'] = true;

/////////////////////////////////////////////////////////////////////////////////

return $fields;