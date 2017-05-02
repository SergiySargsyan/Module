<?php 
    $a = 5;
    $b = 7;
    echo $a . "  " . $b . "<br/>";
    $b = &$a;
    echo $a . "  " . $b . "<br/>";
    $b = "sss";
    echo $a . "  " . $b . "<br/>";
    unset ($a);
    echo $a . "  " . $b . "<br/>";
    $a = 13;
    echo $a . "  " . $b . "<br/>";
?>