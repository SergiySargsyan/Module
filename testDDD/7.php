<?php 
    global($a);
    $a=5;
    function ddd(){
        echo 1;
        echo global($a);
    }
    ddd();
?>