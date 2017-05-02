<?php

class Fraction {
    public $numerator;
    public $denominator;
    
    public function __construct($numerator,$denominator){
        if ($denominator==0) {
            throw new Myexception("Yeeee");
        }

        $this->numerator=(int)$numerator;
        $this->denominator=(int)$denominator;
    }
    public function decimal($r){
        $rez = $this->numerator/$this->denominator;
        $rez = round($rez, $r);
        return $rez;
    }
    
    public function  nsd() {
        $tem = clone($this);
        $a = $tem->numerator;
        if ($a==0) {
            return $a;
        }
        $b = $tem->denominator;
        while ($b != 0) {
            $tmp = $a%$b;
            $a = $b;
            $b = $tmp;
        }
        return $a;
    }
    
    public function reduction(){
        $nsd = $this->nsd();
        $rez = clone($this);
        $rez->numerator = $rez->numerator / $nsd;
        $rez->denominator = $rez->denominator / $nsd;
        return $rez;
    }
    
    public static function addition(Fraction $F1, Fraction $F2){
        $temp1 = clone $F1;
        $temp2 = clone $F2;
        $temp1->denominator *= $F2->denominator;
        $temp2->denominator *= $F1->denominator;
        $temp1->numerator *= $F2->denominator;
        $temp2->numerator *= $F1->denominator;
        $temp1->numerator += $temp2->numerator;
        $temp1=$temp1->reduction();
        return $temp1;
    }
    
    public static function subtraction(Fraction $F1, Fraction $F2){
        $temp1 = clone $F1;
        $temp2 = clone $F2;
        $temp1->denominator *= $F2->denominator;
        $temp2->denominator *= $F1->denominator;
        $temp1->numerator *= $F2->denominator;
        $temp2->numerator *= $F1->denominator;
        $temp1->numerator -= $temp2->numerator;
        $temp1=$temp1->reduction();
        return $temp1;
    }
    
    public static function multiplication(Fraction $F1, Fraction $F2){
        $temp1 = clone $F1;
        $temp1->numerator *= $F2->numerator;
        $temp1->denominator *= $F2->denominator;
        $temp1 = $temp1->reduction();
        return $temp1;
    }
    public static function division (Fraction $F1, Fraction $F2){
        $temp1 = clone $F1;
        $temp1->numerator *= $F2->denominator;
        $temp1->denominator *= $F2->numerator;
        $temp1 = $temp1->reduction();
        return $temp1;
    }
    
}
 