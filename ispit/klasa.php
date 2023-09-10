<?php
include "database.php";
include "singleton.php";
class Klasa

{
  
private $host;
private $db;
private $user;
private $pass;

    public function __construct()
    {
        $this->db=DB::getInstance();
        $this->conn=$this->db->getConnection();
    }

}


?>