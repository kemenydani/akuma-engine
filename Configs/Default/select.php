<?php

return $select =  [

    'type' => 'select', // Input type="text"
    
    'group',
    
    'display' => [
        'label' => 'Select field', // Input label
        'placeholder' => 'Choose an option', // Input placeholder
        'note' => '', // Input usage guide aka: "note" how to use
        'order',
        'hidden',
        'multiple'
    ],
    
    'operations' => [
        'search',
        'order_by',
    ],
    
    'options' => [
        
    ],

    'value' // Value of the input field value="somevalue"

];