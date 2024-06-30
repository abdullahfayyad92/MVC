<?php
//part3-46
namespace MVC\controllers;
use MVC\core\controller ;
use MVC\models\user;
use GUMP;
use MVC\core\Session;

class usercontroller extends controller{
    public function __construct()
    {
        Session::start();
        $user_data = Session::Get('user');
        // print_r($user_data);die;
        if(empty($user_data)){
            echo 'class not access';die;
        }
    }
    public function index(){
        echo 'user';
    }
    public function add(){
        echo 'add';
    }
}