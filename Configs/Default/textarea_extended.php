<?php

return $textarea_extended =  [

    'type' => 'textarea_extended', // Input type="text"
    
    'group',
    
    'display' => [
        'label' => 'Textarea', // Input label
        'placeholder' => 'Enter some text here', // Input placeholder
        'note' => 'This field a accepts text and numbers too.', // Input usage guide aka: "note" how to use
        'order',
        'hidden'
    ],
    
    'operations' => [
        'search',
        'order_by',
    ],

    'value' // Value of the input field value="somevalue"

];
