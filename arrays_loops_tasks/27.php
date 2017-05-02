<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>27</title>
</head>
<body>
    <form action = "27.php" method = "POST">
        <input type="text" name="row"/>
        <input type="text" name="cols"/>
        <input type="submit" value="Submit"/>
    </form>
    <?php
    /* Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице. 
    Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green'). 
    Необходимо создать скрипт, который по заданным условиям выведет таблицу размера 
    $rows на $cols, в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors. 
    В каждой ячейке должно находиться случайное число. */
    $row=(int)$_POST["row"];
    $cols=(int) $_POST["cols"];
    $colors = array('red','yellow','blue','gray','maroon','brown','green');
    echo "<table>";
    for ($i = 0; $i < $row; $i++) {
        echo"<tr>";
        for ($k = 0; $k < $cols; $k++) {
            $color = $colors[rand(0,6)];
            $num = rand(1,100000);
            echo "<td style='background-color: $color'>$num</td>";
        }
        echo"</tr>";
    }
    echo "</table>";
?>
</body>
</html>
