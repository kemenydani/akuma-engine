<?php 
//error_reporting(E_ALL); //0->disable error messages

ini_set('upload_max_filesize', '100M');
ini_set('post_max_size', '100M');
ini_set('memory_limit', '100M');
ini_set('max_execution_time', 300);

error_reporting(E_ERROR | E_PARSE);

define("DBPREFIX", "xyz");
define("TMPDIR", "default");
define("LOCATION", $_SERVER['REQUEST_URI']);
define("BASE" , preg_replace('/[^\/]*$/','',$_SERVER["PHP_SELF"]));
define("__ROOT__", __DIR__);


if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1' or $_SERVER['REMOTE_ADDR'] == '::1'){
    $db = new PDO('mysql:host=localhost;dbname=akuma', 'root', '');
}

$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
$db->exec("set names utf8");

require 'Core/Assets/PHPMailer-master/PHPMailerAutoload.php';
include 'Core/Assets/Autoloader/Autoloader.php';
include 'Core/functions.php';

//$mypw = password_hash("123456", PASSWORD_DEFAULT);
//$db->query("UPDATE xyz_users SET password = '".$mypw."' WHERE user_id = 35");

$userh = new \Controllers\User();
$user = $userh->check_session();

$url = \filter_input(\INPUT_GET, 'url');

$Smarty = new \Core\SmartySetup();
\Core\SmartySetup::$templateDir = 'Akuma';
\Core\SmartySetup::$url = $url;

$Smarty->initSmarty();

$MVC = new \Core\MVC();
\Core\MVC::$defaultController = 'Home';
\Core\MVC::$controllerDir = 'Controllers';
\Core\MVC::$configDir = 'Configs';
\Core\MVC::$defaultMethod = 'index';
\Core\MVC::$maxUrlElements = 10;

$MVC->MVCStart($url);

