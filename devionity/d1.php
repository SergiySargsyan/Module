<?php
spl_autoload_register(function($className) {
    $filePath = "classes/{$className}.php";
    
    if (!file_exists($filePath)) {
        die("file {$filePath} not found");
    }
    require_once($filePath);
});

// var_dump($user);

$car1 = new Car();
$car1->brand="Toyota";
$car1->model="Corola";
$car1->year=2000;
$car1->driver=$user;

$car2 = new Car();
$car2->brand="Masda";
$car2->model="6";
$car2->year=2015;

$car3 = new Car();
$car3->brand="Ford";
$car3->model="Taurus";
$car3->year=1995;

// var_dump($car1);
// print_r($car1);

// $user->login();  //function
// $user->logout();

// $car1->showBrand();
// $car1->showModel();
$car1->setPrice("12345678.13561");
echo $car1->getPrice();
// var_dump($user->isLogged);
$water = new WaterCar();
var_dump($water);

// $manager = new Manager();
// $manager->setUser("man", "pass", "@mail", 12, true);
// var_dump($manager);

// $admin = new Admin();
// $admin->setUser("Admin", "pass", "@mail", 12, true);
// var_dump($admin);

// $clone =  clone $admin;
// var_dump($clone);

$e = Car::$coun;
// $water->abc();
echo $e;