<?php
namespace core;

use mysqli;
use Views\Erorrs;
class DbConnect{
    private mysqli $con;
    private $host="sql6.freemysqlhosting.net";

    private $db="sql6681602";

    private $username="sql6681602";
    private $password="N6BjuAGhYY";
    function __construct() {

        try {
            $this->con = mysqli_connect($this->host,$this->username,$this->password,
        $this->db);
        } catch (\Throwable $error) {
           Erorrs::showmsg("there is a problem for connecting to the Database");
        }
    }    
    public function connect() {
        
        $query="SELECT * FROM `users`";
        $result=mysqli_query($this->con,$query);
        var_dump($result->fetch_assoc()["username"]);
    }
}


