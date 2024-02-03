<?php

include __DIR__."/Bootstrap/boot.php";
use Core\Database\DbConnect;

echo "index";
echo"<hr>";
echo $_ENV["host"];


$test=new DbConnect($_ENV["host"],$_ENV["db"],$_ENV["username"],$_ENV["password"]);
$test->connect();
$url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Router::Get($url);
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



