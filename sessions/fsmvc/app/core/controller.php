<?php

// namespace MVC\core;
// use Dcblogdev\PdoWrapper\Database as Database ; //part4-45

// class controller{
//     public function view($path,$parms){
//         extract($parms);
//         require_once(VIEWS.$path.".php");
//     }
//     //part4-45
//     public function db(){

//         // make a connection to mysql here
//         $options = [
//             //required
//             'username' => 'root',
//             'database' => 'fs8_proone',
//             //optional
//             'password' => '',
//             'type' => 'mysql',
//             'charset' => 'utf8',
//             'host' => 'localhost',
//             'port' => '3306'
//         ];

//         return $db = new Database($options);
//     }

// }


//part1-46
namespace MVC\core;


class controller{
    public function view($path,$parms){
        extract($parms);
        require_once(VIEWS.$path.".php");

    }

}
 