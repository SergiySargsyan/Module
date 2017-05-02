<?php
    /* Ваше задание создать массив, наполнить это случайными значениями (функция rand), найти максимальное и минимальное значение и поменять их местами. */
    $arr;
    for ($i = 0; $i < 10; $i++) {
        $arr[] = rand(0,100);
    }
    $min = 0;
    $max = 0;
    $min_value=$arr[0];
    $max_value=$arr[0];
    var_dump($arr);
    foreach($arr as $key => $value){
        if($value > $max_value){
            $max_value = $value;
            $max = $key;
        }
        if ($value < $min_value){
            $min_value = $value;
            $min = $key;
        }
    }
    $arr[$max] = $min_value;
    $arr[$min] = $max_value;
    var_dump($arr);
?>