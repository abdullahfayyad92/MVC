<?php
//session47
namespace MVC\controllers;
use MVC\core\controller ;
use MVC\models\user;
use GUMP;
use MVC\core\Session;
use MVC\core\helpers;

class usercontroller extends controller{
    public function __construct()
    {
        Session::Start();
    }

    public function index(){
        echo 'user';
    }
    public function login(){
        $this->view('home/login',['title'=>'login']);
    }
    public function logout(){
        session::Stop();
    }
    public function postlogin(){
        $v = GUMP::is_valid($_POST,[
            'email'=>'required',
            'password'=>'required'
        ]);
        // print_r($v);die;
        if($v == true){
            // print_r($v);die;
            $user = new user();
            $data =$user->GetUser($_POST['email'],$_POST['password']);
            // print_r($data);die;
            if(!empty($data)){
                session::Set('user',$data);
                helpers::redirect('adminpost/index');

            }
        }
    }
}