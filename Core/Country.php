<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Core;

class Country {
    
    public $countries = [];
    
    public function __construct(){
	$this->countries = include_once __ROOT__.'/Core/countries.php';
    }
	    
    public function get_country_name($country_code){
	return $this->countries[strtoupper($country_code)];
    }
    
}
