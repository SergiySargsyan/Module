<?php
    /* Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным. */
    $arr = [1=>"Monday", 2=>"Tuesday", 3=>"Wednesday", 4=>"Thursday", 5=>"Friday", 6=>"Saturday", 7=>"Sunday"];
    foreach($arr as $key => $value){
        if ($key==6 || $key==7){
            echo "<b>$value</b><br/>";
        } else {
            echo "$value<br/>";
        }
    }
?>