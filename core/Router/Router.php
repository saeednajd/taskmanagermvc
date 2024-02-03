<?php
namespace Core\Router;
class Router{
    protected $url;
    public static function Get(string $url=""){

       
            echo $url;
            echo "<hr>";
        echo basename(parse_url($url, PHP_URL_PATH));
    }
}
