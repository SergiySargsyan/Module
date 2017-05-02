<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
class A
{
    private $bar = 1;
    public static $d = "ffff";
    private static function test($a, $b)
    {
        echo $a . $b;
    }

    public static function __callStatic($name, $args)
    {
        echo "You tried to call static func {$name} with args:";
        print_r($args);
    }
}
echo A::$d;
//A::test('Hello', 123);
// You t