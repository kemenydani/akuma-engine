<?php

return $youtube_video =  [

    'type' => 'youtube_video', // Input type="text"
    
    'group',
    
    'display' => [
        'label' => 'Youtube field', // Input label
        'placeholder' => 'Enter a youtube url here', // Input placeholder
        'note' => 'This field a accepts tonly an url.', // Input usage guide aka: "note" how to use
        'order',
        'hidden'
    ],
    
    'operations' => [
        'search',
        'order_by',
    ],
    
    'value_type' => 'string',
    'value' // Value of the input field value="somevalue"

];