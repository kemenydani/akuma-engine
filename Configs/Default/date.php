<?php

return $text =  [

    'type' => 'date', // Input type="text"
    
    'group',
    
    'display' => [
        'label' => 'Date field', // Input label
        'placeholder' => 'Enter a date here', // Input placeholder
        'note' => 'This field a accepts dates.', // Input usage guide aka: "note" how to use
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