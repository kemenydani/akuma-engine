<?php
$Cfg = new Core\Cfg;     
$fields = $Cfg->setDefault([
    'video_id, number',
    'youtube_id, youtube_video',
    'yt_id, text',
    'video_title, text',
    'video_desc, textarea',
    //'related_coverage, select',
]);

////////////////////////////////////////////////////////////////////////////////////////

$fields['video_id']['display']['hidden'] = true;

$fields['video_title']['display']['label'] = 'Title';
$fields['video_title']['operations']['search'] = true;
$fields['youtube_id']['display']['label'] = 'Youtube url';
$fields['yt_id']['display']['label'] = 'Youtube id';
$fields['yt_id']['display']['note'] = 'https://www.youtube.com/watch?v=<b>oHg5SJYRHA0</b>';
$fields['video_desc']['display']['label'] = 'Description';

//$fields['related_coverage']['display']['label'] = 'Related Coverage';
//$fields['related_coverage']['options'] = $Cfg->Coverages();
////////////////////////////////////////////////////////////////////////////////////////

return $fields;