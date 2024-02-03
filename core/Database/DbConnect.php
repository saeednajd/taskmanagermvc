<?php
namespace Core\Database;

use mysqli;
use Views\Erorrs;
class DbConnect{
    private mysqli $con;
    private $host;
    private $db;
    private $username;
    private $password;
    function __construct($host,$db,$username,$password) {
        $this->host=$host;
        $this->db=$db;
        $this->username=$username;
        $this->password=$password;
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


