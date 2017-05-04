<?php

namespace Core;

class Fieldhandler {

    public $Fields; 
    
    public function __construct($Fields) {
        $this->Fields = $Fields;
    }
    
    public function setHidden($fieldName){
        $this->Fields[$fieldName]['display']['hidden'] = true;
    }
    
    public function setOrder($fieldName, $Value){
        $this->Fields[$fieldName]['display']['order'] = (int)$Value;
    }
    
    public function setEnableSearch($fieldName){
        $this->Fields[$fieldName]['operations']['search'] = true;
    }
    
    public function setEnableOrder($fieldName){
        $this->Fields[$fieldName]['operations']['order'] = true;
    }
    
    public function setLabel($fieldName, $Value){
        $this->Fields[$fieldName]['display']['label'] = (string)$Value;
    }
    
    public function setInputGroup($fieldName, $Value){
        $this->Fields[$fieldName]['group'] = (string)$Value;
    }
    
    public function setPlaceholder($fieldName, $Value){
        $this->Fields[$fieldName]['display']['placeholder'] = (string)$Value;
    }
    
    public function setNote($fieldName, $Value){
        $this->Fields[$fieldName]['display']['note'] = (string)$Value;
    }
    
    public function setValue($fieldName, $Value){
        $this->Fields[$fieldName]['value'] = $Value;
    }
    
}
