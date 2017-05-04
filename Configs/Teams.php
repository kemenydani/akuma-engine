<?php
$Cfg = new Core\Cfg;     
$fields = $Cfg->setDefault([
    'team_id, number',
    'team_name, text',
	'team_order, number',
    'type, select',
    'short_name, text',
    'team_image, image',
    'category, select',
    'active, select',
]);

////////////////////////////////////////////////////////////////////////////////////////

$fields['team_id']['display']['hidden'] = true;

$fields['team_name']['operations']['search'] = true;
$fields['team_name']['display']['label'] = 'Team name';

$fields['team_order']['display']['label'] = 'Team order';
$fields['team_order']['display']['note'] = 'Higher order number means better rank in the list.';

$fields['short_name']['operations']['search'] = true;
$fields['short_name']['display']['label'] = 'Short name';
$fields['short_name']['display']['placeholder'] = 'Short name (3-10 chars.)';

$fields['team_image']['display']['label'] = 'Cover image';

$fields['category']['display']['label'] = 'Game';
$fields['category']['options'] = $Cfg->Categories('games');

$fields['type']['display']['label'] = 'Type';
$fields['type']['options'] = [
    'game' => 'game',
    'non-game' => 'nongame'
];

$fields['active']['display']['label'] = 'Visibility';
$fields['active']['options'] = [
    'Inactive' => 0,
    'Active' => 1
];

////////////////////////////////////////////////////////////////////////////////////////

return $fields;