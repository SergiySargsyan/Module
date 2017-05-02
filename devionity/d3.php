<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="d3.php" method="post" >
        <input type="text" title="Brand" name="brand"/>
        <!--<input type="text" title="Model" name="model"/>-->
        <!--<input type="text" title="Year" name="year"/>-->
        <!--<input type="text" title="Price" name="price"/>-->
        <input type="submit" value="Submit"/>
    </form>
</body>
</html>

<?php 
// function ar(){
//     echo __LINE__ ."<br/>" ;
//     echo __DIR__ ."<br/>";
//     echo __FUNCTION__ ."<br/>";
// }
// ar();
spl_autoload_register(function($className) {
    $filePath = "classes/{$className}.php";
    
    if (!file_exists($filePath)) {
        die("file {$filePath} not found");
    }
    require_once($filePath);
});

$t = new User();
foreach ($t as $key=>$value) {
    echo $key . "--" . $value; 
}

$us = new User;
var_dump($usr);
$us->login = 123;
$us->nooo = "asd";
$us->addd("af","dgd",23);
User::asr("adaf",134);
var_dump($us);
echo $us->login;


