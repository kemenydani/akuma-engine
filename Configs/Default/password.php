<?php

return $text =  [

    'type' => 'password', // Input type="text"
    
    'group',
    
    'display' => [
        'label' => 'Text field', // Input label
        'placeholder' => 'Enter some text here', // Input placeholder
        'note' => 'This field a accepts text and numbers too.', // Input usage guide aka: "note" how to use
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