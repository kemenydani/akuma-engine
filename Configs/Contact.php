<?php
$Cfg = new Core\Cfg;     
$userlist = (new Controllers\User())->find(['level > 5']);
$result = [];

foreach($userlist as $user){
    $result[$user['username']] = $user['user_id'];
}

$fields = $Cfg->setDefault([
    'contact_id, number',
    'contact_name, text',
	'email, text',
	'user_id, select',
	'active, select'
]);

////////////////////////////////////////////////////////////////////////////////////////

$fields['contact_id']['display']['hidden'] = true;

$fields['contact_name']['operations']['search'] = true;
$fields['contact_name']['display']['label'] = 'Name';

$fields['email']['display']['label'] = 'Email';

$fields['user_id']['display']['label'] = 'User';
$fields['user_id']['options'] = $result;

$fields['active']['display']['label'] = 'Visibility';
$fields['active']['options'] = [
    'Inactive' => 0,
    'Active' => 1
];
////////////////////////////////////////////////////////////////////////////////////////

return $fields;