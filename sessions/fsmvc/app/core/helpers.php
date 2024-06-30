<?php
namespace MVC\core;
//session47


class helpers{
    public static function redirect ($path){
        $domain= DOMAIN;
        // echo $domain;
        header("LOCATION:$domain/$path");
    }
}