<?php
    /* Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5..*/
    for($i=1; $i<=9; $i++){
        for ($j=0; $j<$i; $j++ ){
            echo $i;
        }
        echo "<br/>";
    }
?>