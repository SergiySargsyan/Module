<?php
    /* Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку '123456789'. Циклы while и for */ 
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $str;
    foreach($arr as $value){
        $str = $str . $value;
    }
    print_r($str);
    echo "<br/>";
    $str2;
    for($i=0; $i < count($arr); $i++){
        $str2 = $str2 . $arr[$i]; 
    }
    print_r($str2);
    echo "<br/>";
    $str3;
    $j=0;
    while($j < count($arr))
    {
        $str3 = $str3 . $arr[$j];
        $j++;
    }
    print_r($str3);
    
?>