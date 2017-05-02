<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="d2.php" method="post">
        <input type="text" name="num"/> <hr>
        <input type="text" name="den"/> <br>
        <input type="submit" value="Submit"/>
    </form>
</body>
</html>

<?php
spl_autoload_register(function($className) {
    $filePath = "classes/{$className}.php";
    
    if (!file_exists($filePath)) {
        die("file {$filePath} not found");
    }
    include_once($filePath);
});
try{
    $num1 = new Fraction(4, 7);
    $num2 = new Fraction(4, 0);
    $numDec =$num1->decimal(8);
    $numAdd = Fraction::addition($num1, $num2);
    $numSub = Fraction::subtraction($num1,$num2);
    $numMul = Fraction::multiplication($num1,$num2);
    $numDiv = Fraction::division($num1,$num2);
    
    var_dump($num1,$num2,$numDec);
}catch (Myexception $e){
    echo $e->getMessage();
}
catch (Exception $e){
    echo $e->getMessage();
}
echo "<br/>13414<hr";

