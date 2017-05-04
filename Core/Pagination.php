<?php

namespace Core;

class Pagination {
    
    public $Pages;
    public $Records;
    public $Current;
    public $Limit = 0;
    public $Start = 0;

    private function setStartRecord(){
        (int)$this->Current = (isset($this->Current) ? (int)$this->Current : 1);
        (int)$this->Start  = ($this->Limit * ($this->Current - 1));
    }
    
    public function paginate($current, $perpage, $total){
        $this->Limit = $perpage;
        $this->Records = $total;
        $this->Current = $current;
        $this->setStartRecord();
        (int)$this->Pages = \ceil($this->Records / $this->Limit);
    }
    
    public function getDetails(){
        return [
           'Records' => $this->Records,
           'Limit' => $this->Limit,
           'Current' => $this->Current,
           'Pages' => $this->Pages
        ];
    }
    
    
}
