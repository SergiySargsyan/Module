<?php
/**
<p>9. Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba".
 * Ввод текста реализовать с помощью формы.</p>
 */
include '9.html';
function reverse($arg)
{
    $b='';
    for ($i = strlen($arg) - 1; $i >= 0; $i--) {
        //   echo $a[$i] ;
        $b .= $arg[$i];
    }
    return $b;
}
echo reverse($_POST['text1']);