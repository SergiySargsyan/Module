<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="2.php" method="post" >
    <p><textarea name="word" cols="30" rows="10"></textarea></p>
    <p><input type="submit" value="ok"></p>
</form>
</body>
</html>

<?php
/* Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.*/
$word = $_POST["word"];
function bigWord($text){
    $text = explode(" ", $text);
    for ($i=0; $i<count($text); $i++){
        for ($k=0; $k<count($text)-1; $k++){
            if (iconv_strlen($text[$k])<iconv_strlen($text[$k+1])){
                $s=$text[$k];
                $text[$k]=$text[$k+1];
                $text[$k+1]=$s;
            }
        }
    }
    echo "{$text[0]}<br/>";
    echo "{$text[1]}<br/>";
    echo "{$text[2]}<br/>";
}
bigWord($word);
?>