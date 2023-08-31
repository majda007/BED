<?php

include_once "./Database.php";

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
    public $hashlozinka;


   
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
    
       
    
    public function emailPostoji($email)
   
    {
       
         
        $query="SELECT * FROM ".$this->table." WHERE email=?";
        $stmt=$this->conn->prepare($query);
        $stmt->bindParam(1,$email);
        $stmt->execute();
        $user=$stmt->fetch();
     
      if ($stmt->rowCount()>0)
        {
          echo "dobro je";
           //return true;
        }
        else 
        {
           echo "nije";
            //return false;
        }
 
}


/*
public function lozinka($email)
 {
     $query="SELECT lozinka FROM ".$this->table." WHERE email=?";
     $stmt=$this->conn->prepare($query);
     $stmt->bindParam(1,$email);
     $stmt->execute();
     $user=$stmt->fetch();
     echo "funkcija".$user;
     return $user;
 }

*/

    public function dodajPodatke()
{
  


        $query="insert into ".$this->table. " (ime, prezime, email, lozinka, token) values (:ime, :prezime, :email, :lozinka, :token)";
        $stmt=$this->conn->prepare($query);
        $this->ime=htmlspecialchars(strip_tags($this->ime));
        $this->prezime=htmlspecialchars(strip_tags($this->prezime));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->lozinka=htmlspecialchars(strip_tags($this->lozinka));
        $this->token=htmlspecialchars(strip_tags($this->token));
        $stmt->bindParam(":ime",$this->ime);
        $stmt->bindParam(":prezime",$this->prezime);
        $stmt->bindParam(":email",$this->email);
        $stmt->bindParam(":lozinka",$this->lozinka);
        $stmt->bindParam(":token",$this->token);

        
        

        if ($stmt->execute())
        {
            echo "Uspješno ste se registrirali";
        }


        else
        {
            echo "nije dobra";
        }
            
    

   
   
}

}















?>