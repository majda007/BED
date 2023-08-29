<?php

class Database
{
    private $host="localhost";
    private $db_name="biljeske";
    private $username="root";
    private $pass="majda123";
    private $conn;

    public function connect()
    {
        $this->conn=null;
        try
        {
        $this->conn=new PDO("mysql:host=".$this->host.";dbname=".$this->db_name,$this->username,$this->pass);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            echo "Greška pri spajanju na bazu: ".$e->getMessage();
        }
        return $this->conn;
    }

}

?>