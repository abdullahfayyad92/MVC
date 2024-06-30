<?php
//part4-44

// echo 'test';
// echo '<pre>';
// print_r($_SERVER);





// echo dirname(__DIR__);
// echo DIRECTORY_SEPARATOR;
// define("DS",DIRECTORY_SEPARATOR);
// define("ROOT",dirname(__DIR__));
// define("APP",ROOT.DS."app");
// define("CONFIG",APP.DS."config");
// define("CONTROLLES",APP.DS."controllers");
// define("CORE",APP.DS."core");
// define("MODELS",APP.DS."models");
// define("VIEWS",APP.DS."views");
// echo CONFIG;

// require_once(CORE."/app.php");

// $c =new app();


//part1-45
define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__));
define("APP",ROOT.DS."app");
define("CONFIG",APP.DS."config".DS);
define("CONTROLLES",APP.DS."controllers".DS);
define("CORE",APP.DS."core".DS);
define("MODELS",APP.DS."models".DS);
define("VIEWS",APP.DS."views".DS);
//SESSION47
define("DOMAIN","http://mvc.test/");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","fs8_proone");
define("DATABASE_TYPE","mysql");

require_once("../vendor/autoload.php");
// echo DOMAIN;die;

// $c =new MVC\core\app();

//part3-45
// $c =['title'=>'home','name'=>'ali'];
// // print_r($c);
// extract($c);
// echo $title;
// echo '<pre>';
// echo $name;

