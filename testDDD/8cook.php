<?php 
    setcookie('name',0);
    var_dump($_COOKIE);
    
    function cookieset ($key, $value, $expire = 86400){
        setcookie($key, $value, time() + $expire );
    }
    
    function cookieGet ($key){
        if (isset($_COOKIE)){
            return $_COOKIE;
        }
        return 0;
    }
    function cookieExists ($key){
        return isset($_COOKIE[$key]);
    }
    function cookieDelete ($key){
        cookieset($key,'',-1);
        if(cookieExists($key))
        {
            unset($_COOKIE[$key]);
        }
    }
    var_dump(getcookie ('name'));
?>