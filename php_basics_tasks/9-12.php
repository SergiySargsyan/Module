<?php 
    header('Content-Type: text/html; charset=utf-8');
    /*9. Создайте переменную day и присвойте ей произвольное числовое значение.*/
    $day=rand(0, 10);
    echo "Случайный день $day";
    echo "<br/>";
    /*10. С помощью конструкции switch выведите фразу: "Это рабочий день", 
    если значение переменной day попадает в диапазон чисел от 1 до 5 (включительно).*/
    /*11. С помощью конструкции switch выведите фразу: "Это выходной день", 
    если значение переменной day попадает в диапазон чисел от 6 до 7 (включительно).*/
    /*12. С помощью конструкции switch выведите фразу: "Неизвестный день", 
    если значение переменной day не попадает в диапазон чисел от 1 до 7 (включительно)*/
    switch ($day) {
    case 1:
        print("Это рабочий день - " . "Понедельник");
        break;
    case 2:
        print("Это рабочий день - " . "Вторник");
        break;
    case 3:
        print("Это рабочий день - " . "Среда");
        break;
    case 4:
        print("Это рабочий день - " . "Четверг");
        break;
    case 5:
        print("Это рабочий день - " . "Пятница");
        break;
    case 6:
        print("Это выходной день - " . "Суббота");
        break;
    case 7:
        print("Это выходной день - " . "Воскресенье");
        break;
    default :
        print("Неизвестный день");
        break;
    };
?>