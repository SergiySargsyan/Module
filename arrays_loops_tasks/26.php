<?php
    /*  Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф-я rand). Далее, вычислить произведение тех элементов, 
    которые больше ноля и у которых парные индексы. После вывести на экран элементы, которые больше ноля и у которых не парный индекс.*/
    header('Content-Type: text/html; charset=utf-8');
    $arr;
    $proiz=1;
    $unindex ="элементы, которые больше ноля и у которых не парный индекс: ";
    for ($i = 0; $i < 10; $i++) {
        $arr[] = rand(0,100);
        if($arr[$i]>0&&$i%2==0){
            $proiz*=$arr[$i];
        } elseif($arr[$i]>0&&$i%2==1){
            $unindex = $unindex . $arr[$i] ."  ";
        }
    }
    var_dump($arr);
    echo "$proiz<br/>";
    echo $unindex;
?>