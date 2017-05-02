<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="1.php" method="post">
    <textarea name="first"  cols="30" rows="10"></textarea>
    <textarea name="second" cols="30" rows="10"></textarea>
    <p><input type="submit" value="ok"> </p>
</form>
</body>
</html>

<?php
/*1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами. */
$first = $_POST ['first'];
$second = $_POST ['second'];
//$first='11111 3 11 aa bb';
//$second='11111 ff 11 22';
function getCommonWords($first, $second){
    $first = explode(' ', $first);
    $second = explode(' ', $second);
    for ($i=0; $i<count($first); $i++)
    {
        for ($k=0; $k<count($second); $k++)
        {
            if($first[$i]===$second[$k])
            {
                $rez[] = $first[$i];
            }
        }
    }
    $rez = array_flip($rez); //Меняем местами ключи и значения;
    unset ($rez[""]) ; //Удаляем элемент массива
    $rez = array_flip($rez); //Меняем местами ключи и значения
    $rez = array_unique($rez);
    return $rez;
}
    print_r(getCommonWords($first,$second));
?>