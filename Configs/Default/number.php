<?php

return $number = [

    'type' => 'number', // Input type="number"

    'group',
    
    'display' => [
        'label' => 'Number field', // Input label
        'placeholder' => 'Enter a number here', // Input placeholder
        'note' => 'This field a accepts only numbers.', // Input usage guide aka: "note" how to use
        'order',
        'hidden'
    ],
    
    'operations' => [
        'search',
        'order_by',
    ],
    
    'value' // Value of the input field value="somevalue"

];