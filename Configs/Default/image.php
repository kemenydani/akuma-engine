<?php

return $text =  [

    'type' => 'image', // Input type="text"
    
    'group',
    
    'display' => [
        'label' => 'Image field', // Input label
        'placeholder' => 'Choose an image', // Input placeholder
        'note' => 'This field a accepts image urls', // Input usage guide aka: "note" how to use
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