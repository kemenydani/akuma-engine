<?php

function smarty_function_country($params){

    $countries = include __ROOT__.'/Core/countries.php';
    return $countries[$params['country_id']];
    
}
