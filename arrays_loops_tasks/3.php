<?php 
    /* Дан массив с элементами 26, 17, 136, 12, 79, 15. 
    С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.*/
    $arr = array( 26, 17, 136, 12, 79, 15);
    $rez = 0;
    foreach ($arr as $key)
    {
        $rez = $rez + pow($key, 2);
        echo "$rez<br/>";
    }
?>