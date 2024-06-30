<?php

//part1 pdo


$host ="localhost";
$dbname ="fs8_proone";
$user="root";
$password="";

$dsn ="mysql:host=$host;dbname=$dbname";

//connection

$con= new PDO($dsn,$user,$password);
// $con->setAttribute(PDO::FETCH_ASSOC,true);
$con->exec("set names utf8");


//query select


 
// $q= $con->query("SELECT * FROM `user` WHERE `name`='ali'");
// $res =$q->fetchAll(PDO::FETCH_ASSOC);
// // var_dump($res);
// echo '<pre>';
// print_r($res);


//query insert
// $q= $con->query("INSERT INTO `user`(name,email,password) VALUES ('helal','helal','456') ");
// echo $q->rowCount();

//prepare select

// $q= $con->prepare("SELECT * FROM `user` WHERE `name`=? AND `password` =?");
// $q->execute(['ali',123]);
// $res =$q->fetchAll();
// echo '<pre>';
// print_r($res);


//prepare insert 
$q= $con->prepare("INSERT INTO `user`(name,email,password) VALUES (:name , :email , :password ) ");
$q->execute(['email'=>'محمد','name'=>'محمد','password'=>'محمد']);
echo $q->rowCount();
