<?php

class User 
{
    private $login;
    protected $password;
    protected $email;
    protected $rating = 0;
    protected $isLogged = false;
    private $data = array();
    public $iter = "1";
    public $reti = "2";
    
    public function setUser($login,$password,$email,$rating,$isLogged){
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
        $this->rating = $rating;
        $this->isLogged = $isLogged;
    }
    
    public function getUser(){
        return $this;
    }
    
    public function login(){
        $this->isLogged = true;
        echo "login<br/>";
    }
    
    public function logout(){
        $this->isLogged = false;
        echo "logout<br/>";
    }
    
     public function __clone()
    {
        echo 'Cloned!';
    }
    
    public function __get($name)
    {
        echo "Получение '$name'<br/>";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
    }
    
    public function __set($name, $value)
    {
        echo "Установка '$name' в '$value'<br/>";
        $this->data[$name] = $value;
    }
    
    public function __call($name, $arg){;
        echo "Function $name not found your argument "; 
        print_r($arg);
        echo  "<br/>";
    }
    
    public static function __callStatic($name, $args){
        echo "Static function $name not found your argument "; 
        print_r($args);
        echo  "<br/>";
    }
    
}