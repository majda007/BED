<?php


include_once "./database.php";
include_once "./korisnikmodel.php";
include_once "./registracija.php";
include_once "./korisnikcontroller.php";
$database=new Database($host, $db_name, $username, $pass);
$db=$database->connect();


$registracija=new RegistracijaView();
$korisnikmodel=new KorisnikModel($db);


$controller= new KorisnikController($korisnikmodel, $registracija);

$registracija->prikaziFormu();

if(isset($_POST["submit"]))
{
    $ime=$_POST["ime"];
    $prezime=$_POST["prezime"];
    $email=$_POST["email"];
    $lozinka=$_POST["lozinka"];
    $controller->dodajPodatke($ime, $prezime, $email, $lozinka);

}


//$testEmail="majda@majda.com";

    
$controller->prikaziSvePodatke();
/*
 if ($korisnikmodel->emailPostoji($testEmail))
 {
    echo "Postoji";
 }

 else
 {
    echo "Ne postoji";
 }

*/

?>