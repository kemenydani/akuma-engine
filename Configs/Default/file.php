<?php

return $text =  [

    'type' => 'file', // Input type="text"

    'group',

    'display' => [
        'label' => 'File field', // Input label
        'placeholder' => 'Choose a file', // Input placeholder
        'note' => 'This field a accepts file urls', // Input usage guide aka: "note" how to use
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