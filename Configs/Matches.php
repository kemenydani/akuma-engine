<?php
$Cfg = new Core\Cfg;     
$fields = $Cfg->setDefault([
	'match_id, number',
	'category, select',
	'home_team_id, select',
	'home_name, text',
	'map, map',
	'score_display_type, select',
	//'home_score, number',
	'enemy_name, text',
	//'enemy_score, number',
	'status, select',
	'active, select',
	'description, textarea'
]);

////////////////////////////////////////////////////////////////////////////////////////

$fields['match_id']['display']['hidden'] = true;

$fields['category']['operations']['search'] = true;
$fields['category']['display']['label'] = 'Game';
$fields['category']['options'] = $Cfg->Categories('games');

$fields['home_team_id']['display']['label'] = 'Home team';
$fields['home_team_id']['display']['placeholder'] = 'Choose a team.';
$fields['home_team_id']['options'] = $Cfg->Teams();
$fields['home_team_id']['display']['note'] = 'Select a team from your squads.';

$fields['home_name']['display']['label'] = 'Home team alias';

$fields['map']['display']['label'] = 'Maps';
$fields['map']['display']['note'] = 'You can add additional maps by clicking the [Add map] button.';

$fields['score_display_type']['display']['label'] = 'Score theme';
$fields['score_display_type']['display']['note'] = 'Real score is like: 200:200, Simple score is like: 1:0';
$fields['score_display_type']['options'] = [
    'Real score' => 0,
    'Simple score' => 1,
];

$fields['home_name']['display']['note'] = 'Leave it empty if you want to display the squad name, what you selected in [Home team] field.';

//$fields['home_score']['display']['label'] = 'Home score';
//$fields['home_score']['group'] = 'score';

$fields['enemy_name']['display']['label'] = 'Enemy team';
$fields['enemy_name']['operations']['search'] = true;

//$fields['enemy_score']['display']['label'] = 'Enemy score';
//$fields['enemy_score']['group'] = 'score';

$fields['status']['operations']['search'] = true;
$fields['status']['display']['label'] = 'Status';
$fields['status']['options'] = [
    'Upcoming' => 0,
    'Started' => 1,
    'Finished' => 2
];

$fields['active']['display']['label'] = 'Visibility';
$fields['active']['options'] = [
    'Inactive' => 0,
    'Active' => 1
];

$fields['description']['display']['label'] = 'Description';

////////////////////////////////////////////////////////////////////////////////////////

return $fields;