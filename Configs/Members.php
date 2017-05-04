<?php
$Cfg = new Core\Cfg;     
$fields = $Cfg->setDefault([
    'member_id, number',
    'user_id, select',
    'team_id, select',
    'platform, text',
    'facebook, text',
    'youtube, text',
    'twitter, text',
	'instagram, text',
    'player_avatar, image',
    'about, textarea',
    'age, number',
    'role, text',
    'active, select',
]);

////////////////////////////////////////////////////////////////////////////////////////


$fields['user_id']['operations']['search'] = true;

$fields['member_id']['display']['hidden'] = true;

$fields['user_id']['display']['label'] = 'User';
//$fields['user_id']['display']['placeholder'] = 'Choose a user from the registered users.';
$fields['user_id']['options'] = $Cfg->Users();

$fields['facebook']['display']['label'] = 'Facebook link';
$fields['youtube']['display']['label'] = 'Youtube link';
$fields['twitter']['display']['label'] = 'Twitter link';
$fields['instagram']['display']['label'] = 'Instagram link';

$fields['team_id']['display']['label'] = 'Team';
$fields['team_id']['display']['placeholder'] = 'Choose a team.';
$fields['team_id']['options'] = $Cfg->Teams();

$fields['about']['display']['label'] = 'About the player';
$fields['about']['display']['note'] = 'If you leave this empty, then the site will use the player bio what he has given on his own profile page. Otherwise this will overwrite his profile bio. ';

$fields['player_avatar']['display']['label'] = 'Player avatar image';
$fields['player_avatar']['display']['note'] = 'An optimal image is: (width: 200px, height: 230px).';
$fields['age']['display']['label'] = 'Age of the player';

$fields['platform']['display']['label'] = 'Platform';
$fields['platform']['display']['note'] = 'PC, PS4, XBOX etc.';
        
$fields['role']['display']['label'] = 'Position';
$fields['role']['display']['placeholder'] = 'The rank of the member inside the team.';
$fields['role']['display']['note'] = 'For example: capitain, team member, adcarry, AK74, smg etc.';

$fields['active']['display']['label'] = 'Activity';
$fields['active']['options'] = [
    'Inactive' => 0,
    'Active' => 1
];

////////////////////////////////////////////////////////////////////////////////////////

return $fields;