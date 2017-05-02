<?php 

class Car
{
    public $brand;
    public $model;
    public $year;
    public $driver;
    private $price;
    public static $coun = 0;
    const MY_CONST = 123;
    
    function __construct(){
    self::$coun++;
        echo "car created<br/>";
    }
    
    public function showBrand(){
        echo $this->brand . "<br/>";
    }
    
    public function showModel(){
        echo $this->model . "<br/>";
    }
    
    public function setPrice($valuePrice){
        $valuePrice=(float)$valuePrice;
        $this->price = round($valuePrice, 2);
    }
    
    public function getPrice(){
        return number_format($this->price, 2, ",", " ");
    }
    
    
}