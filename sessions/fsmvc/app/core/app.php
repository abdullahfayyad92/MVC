<?php
namespace MVC\core;
//part4-44


// class app{
//     public function __construct()
//     {
//         echo $_SERVER['QUERY_STRING'];
//     }
// }



//part5-44
// class app{
//     private $controller;
//     private $method;
//     private $params;
//     public function __construct()
//     {
//         $this->url();
//     }
//     private function url(){
//        if(!empty($_SERVER['QUERY_STRING'])){
//         $url= explode("/",$_SERVER['QUERY_STRING']) ;
//         // print_r($url);
//         //this controller 
//         $this->controller = isset($url[0]) ? $url[0]."controller" : "homecontroller";
//         echo $this->controller;
//         //this method
//         $this->method = isset($url[1]) ? $url[1] : "index";
//         // echo $this->method;
//         unset($url[0],$url[1]);
//         // print_r($url);
//         //this params
//         $this->params = array_values($url);
//         // print_r($this->params);
//        }
//     }
// }

//part1-45


// class app{
//     private $controller;
//     private $method;
//     private $params;
//     public function __construct()
//     {
//         $this->url();
//         $this->render();
//     }
//     private function url(){
//        if(!empty($_SERVER['QUERY_STRING'])){
//         $url= explode("/",$_SERVER['QUERY_STRING']) ;
//         // print_r($url);
//         //this controller 
//         $this->controller = isset($url[0]) ? $url[0]."controller" : "homecontroller";
//         // echo $this->controller;
//         //this method
//         $this->method = isset($url[1]) ? $url[1] : "index";
//         // echo $this->method;
//         unset($url[0],$url[1]);
//         // print_r($url);
//         //this params
//         $this->params = array_values($url);
//         // print_r($this->params);
//        }
//     }
//     //part2-45
//     private function render (){
//         $controller ="MVC\controllers\\".$this->controller;
//         if(class_exists($controller)){
//             // echo 'hello';
//             //part3-45 new controller
//             $controller = new $controller;
//             if(method_exists($controller,$this->method)){
//                 // echo 'hello method';
//                 call_user_func_array([$controller,$this->method],$this->params);
//             }else{
//                 echo 'method not exist';
//             }
            
//         }else{
//             echo 'class not exist';
//         }
//     }
// }

//part2-46
class app{
    private $controller;
    private $method;
    private $params;
    public function __construct()
    {
        // echo 'test';die;
        $this->url();
        $this->render();
    }
    private function url(){
        // echo 'test';die;
       if(!empty($_SERVER['QUERY_STRING'])){
        // echo 'test';die;
        $url= explode("/",$_SERVER['QUERY_STRING']) ;
        $this->controller = isset($url[0]) ? $url[0]."controller" : "homecontroller";
        //this method
        $this->method = isset($url[1]) ? $url[1] : "index";
        unset($url[0],$url[1]);
        //this params
        $this->params = array_values($url);
       }
       else{
        
        $this->controller ='homecontroller';
        $this->method ='index';
        $this->params =[];
       }
       
    }
    private function render (){

        $controllers ="MVC\controllers\\".$this->controller;
        if(class_exists($controllers)){
            $controller = new $controllers;
            if(method_exists($controller,$this->method)){
                // echo $this->controller;die;
                call_user_func_array([$controller,$this->method],$this->params);
            }else{
                echo 'method not exist';
            }
            
        }else{
            echo 'class not exist';
        }
    }
}