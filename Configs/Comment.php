<?php
$Cfg = new Core\Cfg;     
$fields = $Cfg->setDefault([
	'comment_id, number',
	'comment_text, text',
	'controller, text'
]);

////////////////////////////////////////////////////////////////////////////////////////

$fields['comment_text']['operations']['search'] = true;
$fields['comment_text']['display']['label'] = 'Comment text';
$fields['controller']['operations']['search'] = true;
$fields['controller']['display']['label'] = 'Module';

////////////////////////////////////////////////////////////////////////////////////////

return $fields;