<?php

$Cfg = new Core\Cfg;     
$fields = $Cfg->setDefault([
    'user_id, number',
    'username, text',
    'level, select',
    'email, text',
	'change_password, select',
    'password, password'
]);

////////////////////////////////////////////////////////////////////////////////////////

$fields['level']['display']['label'] = 'User level';
$fields['level']['options'] = [
    'Administrator (level 10)' => 10,
    'Media admin' => 9,
    'News writer' => 8,
    'Match admin' => 6,
    'Member (level 5)' => 5,
    'Simple User (level 1)' => 1
];

$fields['user_id']['display']['hidden'] = true;

$fields['username']['operations']['search'] = true;
$fields['username']['display']['label'] = 'Username';

$fields['level']['operations']['search'] = true;

$fields['email']['operations']['search'] = true;
$fields['email']['display']['label'] = 'Email';

$fields['password']['display']['label'] = 'Password';

$fields['change_password']['display']['note'] = 'If you do not want to edit the password, leave this on [Do not change the password]. If you want to change the password of this user, choose the [Change the password] option from the select box, and type in the new password into the password field.';
$fields['change_password']['display']['label'] = 'Change password?';
$fields['change_password']['options'] = [
    'Do not change the password' => 0,
    'Change the password' => 1
];

////////////////////////////////////////////////////////////////////////////////////////

return $fields;