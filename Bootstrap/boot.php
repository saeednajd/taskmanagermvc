<?php
//adding auto load  class for composer packages

include __DIR__ ."/../"."/vendor/autoload.php";

// adding env variables to project
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/../");
$dotenv->load();