<?php
spl_autoload_register(function($className) {
    $filePath = "AbstractInterface/{$className}.php";
    if (!file_exists($filePath)) {
        die("file {$filePath} not found");
    }
    require_once($filePath);
});

$a = new Trigule;
var_dump($a);
$a->storona = 7;
var_dump($a);
var_dump($a->size());
var_dump($a->ploc());

