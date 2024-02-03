<?php

namespace Views;

class Erorrs{

    public static function showmsg (string $msg="undefined error "){
        echo "<div style='width: 80%; text-align: left; margin: 11px auto; background: #f45a5a;
         padding: 2vw; border-radius: 1vw;'>".$msg."</div>";
        die();
    }
   
}