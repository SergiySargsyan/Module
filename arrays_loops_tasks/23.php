<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action = "23.php" method = "POST">
        <input type="text" name="numb"/>
        <input type="submit" value="Submit"/>
    </form>
    
    
    <?php
    /* Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем. Например: есть число 123, то программа 
    должна вычислить сумму цифр 1, 2, 3, т. е. 6. По желанию можете сделать проверку на корректность введения данных пользователем */
        $number = $_POST["numb"];
        $number=(str_split($number));
        $result=0;
        for ($i=0;$i<count($number);$i++){
            //echo $arr[$i]."\n";
            $result+=$number[$i];
            //echo $result."\n";
        }
        echo 'Сума чисел = '.$result;
    ?>
</body>
</html>

