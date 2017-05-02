<?php 
    $a = "a";
    var_dump($a);
    settype ($a , integer);
    var_dump($a);
    $a = 5.5;
    var_dump($a);
    print_r(gettype($a));
    $b = true;
    $s = "asdfgh";
    var_dump ($s[3]);
    var_dump((array)$b);
    var_dump((array)$s);
?>