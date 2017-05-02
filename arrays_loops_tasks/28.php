<?php
    /* Вывести таблицу умножения с помощью двух циклов for. */
    $row=10;
    $cols=10;
    echo "<table border = '2'>";
    for ($i = 0; $i < $row; $i++) {
        echo"<tr>";
        for ($k = 0; $k < $cols; $k++) {
            if ($i==0||$k==0){
                if($i==0){
                    print_r("<th>" . $k . "</th>");
                }else{
                    print_r("<th>" . $i . "</th>");   
                }
            }else{
               print_r("<td>" . $i*$k . "</td>"); 
            }
        }
        echo"</tr>";
    }
    echo "</table>";
?>