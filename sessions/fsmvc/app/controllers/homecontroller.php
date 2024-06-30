<?php

//part1-45
namespace MVC\controllers;


//تقريبا part4-44
// class homecontroller{
//     public function index(){
//         echo 'ali';

//     }
//     public static function add(){
//         echo 'toha';
//     }
// }

//part3-45
// use MVC\core\controller ;
// class homecontroller extends controller{
//     public  function index(){
//         $title = 'home index';
//         $h1 = 'wellcom home';
//        $this->view('home/index',['title'=>$title,'h1'=>$h1]);
//     }
//     public static function add(){
//         echo 'toha';
//     }
// }

//part4-45
// use MVC\core\controller ;
// class homecontroller extends controller{
//     public  function index(){
//         $data= $this->db()->run("SELECT * FROM user")->fetchAll();
//         // echo '<pre>';
//         // var_dump($data);die;

//         $title = 'home index';
//         $h1 = 'wellcom home';
//        $this->view('home/index',['title'=>$title,'h1'=>$h1,'data'=>$data]);

//     }
//     public static function add(){
//         echo 'toha';
//     }
// }

//part1-46
// use MVC\core\controller ;
// use MVC\models\user;
// use GUMP;
// class homecontroller extends controller{
//     public  function index(){
//         $user = new user();
        
//         $data = $user->GetAllUsers();
//         $title = 'home index';
//         $h1 = 'wellcom home';
//        $this->view('home/index',['title'=>$title,'h1'=>$h1,'data'=>$data]);

//     }
//     public function login(){
//         $this->view('home/login',['title'=>'login']);
//     }
//     public function postlogin(){
//         // print_r($_POST);die;
//         $v = GUMP::is_valid($_POST,[
//             'email'=>'required',
//             'password'=>'required'
//         ]);
//         echo '<pre>';
//         print_r($v);
//     }
//     public static function add(){
//         echo 'toha';
//     }
// }

//part4-46
// use MVC\core\controller ;
// use MVC\models\user;
// use GUMP;
// use MVC\core\Session;
// class homecontroller extends controller{
//     public function __construct()
//     {
//         Session::Start();
//     }
//     public  function index(){
//         $user = new user();
        
//         $data = $user->GetAllUsers();
//         $title = 'home index';
//         $h1 = 'wellcom home';
//        $this->view('home/index',['title'=>$title,'h1'=>$h1,'data'=>$data]);

//     }
//     public function login(){
//         $this->view('home/login',['title'=>'login']);
//     }
//     public function postlogin(){
//         // print_r($_POST);die;
//         $v = GUMP::is_valid($_POST,[
//             'email'=>'required',
//             'password'=>'required'
//         ]);
//         if($v == true){
//             $user = new user();
//             $data =$user->GetUser($_POST['email'],$_POST['password']);
//             // echo '<pre>';
//             // print_r($data);
//             if(!empty($data)){
//                 // echo 'test';die;
//                 session::Set('user',$data);
//                 header('LOCATION:../user/index');

//             }
//         }
//     }
//     public function register(){
//         $this->view('home/register',['title'=>'register']);
//     }
//     public function postregister(){
//         $v = GUMP::is_valid($_POST,[
//             'email'=>'required',
//             'password'=>'required',
//             'name'=>'required'
//         ]);
//         if($v == true){
//             $user = new user();
//             $data =$user->InsertUser($_POST['name'],$_POST['email'],$_POST['password']);
//             header('LOCATION:/home/login');

            
//         }
//     }
//     public static function add(){
//         echo 'toha';
//     }
// }

//session47
use MVC\core\controller ;
use MVC\models\user;
use GUMP;
use MVC\core\Session;
use MVC\core\helpers;
class homecontroller extends controller{
    public function __construct()
    {
        Session::Start();
    }
    public  function index(){
        $user = new user();
        
        $data = $user->GetAllUsers();
        $title = 'home index';
        $h1 = 'wellcom home';
       $this->view('home/index',['title'=>$title,'h1'=>$h1,'data'=>$data]);

    }
    public function login(){
        $this->view('home/login',['title'=>'login']);
    }
    public function postlogin(){
        $v = GUMP::is_valid($_POST,[
            'email'=>'required',
            'password'=>'required'
        ]);
        if($v == true){
            $user = new user();
            $data =$user->GetUser($_POST['email'],$_POST['password']);

            if(!empty($data)){

                session::Set('user',$data);
                helpers::redirect('user/index');

            }
        }
    }
    public function logout(){
        session::Stop();
    }
    public function register(){
        $this->view('home/register',['title'=>'register']);
    }
    public function postregister(){
        $v = GUMP::is_valid($_POST,[
            'email'=>'required',
            'password'=>'required',
            'name'=>'required'
        ]);
        if($v == true){
            $user = new user();
            $data =$user->InsertUser($_POST['name'],$_POST['email'],$_POST['password']);
            header('LOCATION:/home/login');

            
        }
    }
    public static function add(){
        echo 'toha';
    }
}