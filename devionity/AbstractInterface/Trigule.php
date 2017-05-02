<?php 

class Trigule extends Figure
{
    public $storona = 0;
    
    public function size(){
        return $this->storona * 3;
    }
    public function ploc(){
        echo parent::pl; 
        $d = $this->storona * 4;
        echo $d;
    }
}