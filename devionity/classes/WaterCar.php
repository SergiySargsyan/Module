<?php

class WaterCar extends Car {
    public $waterSpeed;
    public $a = parent::MY_CONST;
    public function abc(){
        echo 3333 .$this->a;
    }
}