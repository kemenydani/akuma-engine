<?php

$Cfg = new Core\Cfg;     
$fields = $Cfg->setDefault([
    'stream_id, number',
    'stream_host, select',
    'stream_title, text',
    'stream_user, text',
	//'stream_live, select',
    'active, select',
]);

////////////////////////////////////////////////////////////////////////////////////////
$fields['stream_user']['operations']['search'] = true;
$fields['stream_id']['display']['hidden'] = true;

$fields['stream_host']['display']['label'] = 'Stream provider';
$fields['stream_host']['options'] = [
    'Twitch.tv' => 'twitch',
    //'Hitbox.tv' => 'hitbox'
];
$fields['stream_title']['display']['label'] = 'Stream title';
$fields['stream_host']['display']['note'] = 'This field is required for the website, to know which videoplayer should we use to display the stream.';
/*
$fields['stream_url']['display']['label'] = 'Url';
$fields['stream_url']['operations']['search'] = true;
$fields['stream_url']['display']['note'] = 'The full URL of the stream page, like: http://www.twitch.tv/esl_csgo/profile';
$fields['stream_url']['display']['placeholder'] = 'Enter the stream url here';
*/
$fields['stream_user']['display']['label'] = 'Stream user';
$fields['stream_user']['display']['label'] = 'Stream user';
$fields['stream_user']['display']['note'] = 'The username of the streamer on the stream provider website. For example: www.twitch.tv/<b>streamuser</b>. You have to enter only streamuser whithout the website url.';
$fields['stream_user']['display']['placeholder'] = 'Stream user';
/*
$fields['stream_live']['display']['label'] = 'Live';
$fields['stream_live']['options'] = [
    'Offline' => 0,
    'Live' => 1
];
*/
$fields['active']['display']['label'] = 'Visibility';
$fields['active']['options'] = [
    'Inactive' => 0,
    'Active' => 1
];
$fields['active']['display']['note'] = 'If you choose inactive, you can add this stream whitout showing in on the homepage, the stream will be displayed only when you activate it from the admin menu.';
////////////////////////////////////////////////////////////////////////////////////////

return $fields;