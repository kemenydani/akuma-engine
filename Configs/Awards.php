<?php
$Cfg = new Core\Cfg;     
$fields = $Cfg->setDefault([
    'award_id, number',
    'event_name, text',
	'event_date, date',
    'team_id, select',
    'game_id, select',
    'place, number',
    'description, textarea',
    'event_url, text',
    'active, select',
]);

////////////////////////////////////////////////////////////////////////////////////////

$fields['award_id']['display']['hidden'] = true;
$fields['event_date']['display']['label'] = 'Event date';
$fields['event_name']['display']['label'] = 'Name';
$fields['event_name']['operations']['search'] = true;
$fields['event_name']['operations']['order'] = true;
$fields['place']['operations']['order'] = true;
$fields['team_id']['display']['label'] = 'Team';
$fields['team_id']['display']['placeholder'] = 'Choose a team.';
$fields['team_id']['options'] = $Cfg->Teams();

$fields['game_id']['display']['label'] = 'Game';
$fields['game_id']['options'] = $Cfg->Categories('games');

$fields['place']['display']['label'] = 'Place';

$fields['description']['display']['label'] = 'Informations';

$fields['event_url']['display']['label'] = 'Event url';

$fields['active']['display']['label'] = 'Visibility';
$fields['active']['options'] = [
    'Inactive' => 0,
    'Active' => 1
];

////////////////////////////////////////////////////////////////////////////////////////

return $fields;