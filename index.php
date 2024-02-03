<?php
include  __DIR__ ."/autoloads.php";
echo "index";
use core\DbConnect;
use core\Router;
// $test=new DbConnect();
// $test->connect();
$url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

Router::Get($url);
// var_dump($_SERVER);
// echo "<hr>";
// echo "آدرس وارد شده:  $url";

// echo "<hr>";

// $url = 'www.test.com/folder1/folder2/file.php';

// // جدا کردن قسمت فولدرها
// $folders = dirname(parse_url($url, PHP_URL_PATH));

// // جدا کردن نام فایل
// $file = basename(parse_url($url, PHP_URL_PATH));
// echo "<hr>";

// echo basename(parse_url($url, PHP_URL_PATH));



?>