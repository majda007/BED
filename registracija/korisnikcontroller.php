<?php 
include_once "./korisnikmodel.php";
include_once "./registracija.php";
class KorisnikController
{
 private $korisnikmodel;
 private $registracija;
 public function __construct($korisnikmodel, $registracija)
 {
    $this->korisnikmodel=$korisnikmodel;
    $this->registracija=$registracija;
 }
 public function prikaziSvePodatke()
        {
            $korisnici=$this->korisnikmodel->dohvatiSvePodatke()->fetchAll(PDO::FETCH_ASSOC);
            $this->registracija->prikaziKorisnike($korisnici);
        }
  /*      
 public function prikaziEmail()
 {
     $korisnici=$this->korisnikmodel->emailPostoji()->fetchAll(PDO::FETCH_ASSOC);
     $this->registracija->prikaziKorisnike($korisnici);
     
 }
*/
 public function dodajPodatke($ime, $prezime, $email, $lozinka)
 {
    $this->korisnikmodel->ime=$ime;
    $this->korisnikmodel->prezime=$prezime;
    $this->korisnikmodel->email=$email;
    $this->korisnikmodel->lozinka=$lozinka;
    
    $this->korisnikmodel->dodajPodatke();
 }


}
 ?>