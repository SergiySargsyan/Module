<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="3.php" method="post">
        <input type="number" name="N" min="1" max="10"  />
        <input type="submit" value="ok"/>
    </form>
</body>
</html>
<?php
    /*  Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов. 
    Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение. */
    $N = $_POST["N"];
    print_r(var_dump($N));
    deleteBigWord($N);
    function deleteBigWord ($n){
        $file = file_get_contents ("3t.txt");
        echo "$file<br/>";
        $arr = (explode(' ',$file));
        print_r($arr);
        for ($i = 0; $i < count($arr); $i++) {
            print_r($arr[$i], iconv_strlen($arr[$i]));
            if (iconv_strlen($arr[$i])>=$N){
                unset($arr[$i]);
            }
        }
        echo "<br/>";
        print_r($arr);
        file_put_contents('3_new.txt',implode(" ", $arr));
    }

?>