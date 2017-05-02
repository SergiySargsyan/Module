<?php
    /* Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. 
    Текущий день должен храниться в переменной $day.*/
    $arr = [1=>"Monday", 2=>"Tuesday", 3=>"Wednesday", 4=>"Thursday", 5=>"Friday", 6=>"Saturday", 7=>"Sunday"];
    foreach($arr as $key => $value){
        if ($key==6 || $key==7){
            if ($key==date("N")) {
                echo "1<b><i>$value</i></b><br/>";
            }
            else{
                echo "2<b>$value</b><br/>";
            }
        } else {
            if ($key==date("N")) {
                echo "<i>$value</i><br/>";
            }
            else{
                echo "$value<br/>";
            }
        }
    }
    
?>