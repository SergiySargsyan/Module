<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="4.php" method="post">
        <input type="text" name="dir">
        <input type="submit" value="find">
    </form>
</body>
</html>
<?php
    /* 4. Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции*/
    $dirr = 'C:\xampp\htdocs\Curse1\start1\functions_forms_tasks' . '\\' . $_POST["dir"];
    //echo $direc;
    function getNameDir ($dir){
        return scandir($dir);
    }
    var_dump(getNameDir($dirr));
?>