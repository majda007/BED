<?php

include_once "./database.php";

class KorisnikModel
{
    private $conn;
    private $table="korisnici";
    public $id;
    public $ime;
    public $prezime;
    public $email;
    public $lozinka;
    public $token;

    public function __construct($db)
    {
        $this->conn=$db;
    }


    public function dohvatiSvePodatke()
    {
    
     $query="select * from ".$this->table;
     $stmt=$this->conn->prepare($query);
     $stmt->execute();
     return $stmt;
 
    }




   /*
    public function emailPostoji($email)
   
    {
    
        $query="SELECT email FROM ".$this->table." WHERE email=?";
        $stmt=$this->conn->prepare($query);
        $stmt->bindParam(1,$email);
        $stmt->execute();

       
        if ($stmt->rowCount()>0)
        {
           return true;
        }
        else 
        {
            return false;
        }
        
    }
    */
    public function dodajPodatke()
    {
        //$nova_lozinka = password_hash($lozinka, PASSWORD_DEFAULT);
        $query="insert into" .$this->table." (ime, prezime, email, lozinka) values (:ime, :prezime, :email, :lozinka )";
        //$query=("insert into".$this->table. "(ime, prezime, email, lozinka) values (:ime, :prezime, :email, :lozinka)");
        $stmt=$this->conn->prepare($query);
        $this->ime=htmlspecialchars(strip_tags($this->ime));
        $this->prezime=htmlspecialchars(strip_tags($this->prezime));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->lozinka=htmlspecialchars(strip_tags($this->lozinka));
        
        $stmt->bindParam(":ime",$this->ime);
        $stmt->bindParam(":prezime",$this->prezime);
        $stmt->bindParam(":email",$this->email);
        $stmt->bindParam(":lozinka",$this->lozinka);
        
        if ($stmt->execute())
        {
            return true;
        }
       
            return false;
        
        
    }
 
}
   
















?>