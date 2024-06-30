<?php
//session47
define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__));
define("APP",ROOT.DS."app");
define("CONFIG",APP.DS."config".DS);
define("CONTROLLES",APP.DS."controllers".DS);
define("CORE",APP.DS."core".DS);
define("MODELS",APP.DS."models".DS);
define("VIEWS",APP.DS."views".DS);

define("DOMAIN","http://news.test");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","fs8_proone");
define("DATABASE_TYPE","mysql");
define("CSS_PATH",DOMAIN."/");//part7
define("PATH",DOMAIN."/");

require_once("../vendor/autoload.php");

$c =new MVC\core\app();

