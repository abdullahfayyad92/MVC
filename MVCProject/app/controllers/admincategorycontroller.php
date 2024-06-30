<?php

namespace MVC\controllers ;
use MVC\core\controller;
use MVC\core\Session;
use MVC\models\category;
use MVC\core\helpers;

class admincategorycontroller extends controller{
    public $category;
    public $user_data;
    public function __construct()
    {
        Session::start();
        $this->user_data = Session::Get('user');

        // print_r($user_data);die;
        if(empty($this->user_data)){
            echo 'class not  access';die;
        }
        $this->category = new category();
    }
    public function index(){
        $data= $this->category->GetAllCategory();
        // var_dump($data);die;
        $this->view('back/category',['title'=>'admin', 'data'=>$data]);
    }
    public function delete($id){
        // echo $id ;
        $data= $this->category->DeleteCategory($id);
        // echo $data;die;
        
        if($data){
            helpers::redirect('admincategory/index'); 
            
        }
    }
    public function add(){
        // print_r($this->user_data['id']);die;
        $this->view('back/addcategory',['title'=>'title']);
    }
    public function categoryadd(){
        $img = $_FILES['img'];
        // var_dump($img);die;
        move_uploaded_file($img['tmp_name'],"img/".$img['name']);
        $dat=['name'=>$_POST['name'],'icon'=>$_POST['icon'],'user_id'=>$this->user_data['id'],'img'=>$img['name']];
        // print_r($dat);die;
        $data= $this->category->AddCategory($dat);
        if($data){
            helpers::redirect('admincategory/index'); 
            
        }

    }
    public function update($id){
        $data = $this->category->GetCategory($id);
        // var_dump($data);die;
        // print_r($data);die;
        $this->view('back/updatecategory',['title'=>'title','data'=>$data]);
    }
    public function categoryupdate(){
        $img = $_FILES['img'];
        if(!empty($img['name'])){
            move_uploaded_file($img['tmp_name'],"img/".$img['name']);
            $dat=['name'=>$_POST['name'],'icon'=>$_POST['icon'],'user_id'=>$this->user_data['id'],'img'=>$img['name']];

        }else{
            $dat=['name'=>$_POST['name'],'icon'=>$_POST['icon'],'user_id'=>$this->user_data['id']];
            // $dat=['name'=>$_POST['name'],'icon'=>$_POST['icon'],'user_id'=>$this->user_data['id'],'img'=>$_POST]; مش نافعه
        }
        
        $id=['id'=>$_POST['id']]; 
        $data= $this->category->UpdateCategory($dat,$id);
        if($data){
            helpers::redirect('admincategory/index'); 
            
        }else{
            helpers::redirect('admincategory/index'); 
        }
    }
}