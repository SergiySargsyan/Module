<?php
    /* Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if выведите на экран 
    столбец элементов массива, как показано на картинке. 1, 2, 3 4, 5, 6 7, 8, 9 */
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    foreach ($arr as $value){
       if ($value%3==0) {
           echo "$value ";
       } else {
           echo "$value, ";
       }
    }
    echo "<br/>";
    $count = 1;
    foreach ($arr as $value){
       if ($count%3==0) {
           echo "$value ";
       } else {
           echo "$value, ";
       }
       $count++;
    }
?>