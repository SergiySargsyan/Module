<?php
    /* Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.*/
    $x = "x";
    for($i=1; $i<20; $i++){
        for ($j=0; $j<$i*2; $j++ ){
            echo $x;
        }
        echo "<br/>";
    }
?>