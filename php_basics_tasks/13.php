<?php
/* Заданы две переменные: s - длина участка, который проехал автомобиль; 
t - время движения в часах. Вывести скорость автомобиля на 
заданном участке в км/час и в м/сек. */
    $lenght = 100;
    $time = 2;
    echo "Lenght ", $lenght, " km. Time " , $time," hours <br/>";
    $speedKM = $lenght/$time;
    echo "Speed km/h = ", $speedKM, "<br/>";
    $speedM = ($lenght/$time)/3.6;
    echo "Speed m/s = ", $speedM, "<br/>";
?>

