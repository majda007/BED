<?php


include_once "./Database.php";
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
    $ponLozinka=$_POST["ponovljenalozinka"];
    $token= "token2";

    if($lozinka===$ponLozinka)

    {
      $korisnikmodel->emailPostoji($email);
      
     
      if(!$user)
      {
         $lozinka=password_hash($lozinka,PASSWORD_DEFAULT); 
         $controller->dodajPodatke($ime, $prezime, $email, $lozinka, $token);
      }
      $controller->prikaziSvePodatke();
    }
   
     else

     {
      echo "pogrešna lozinka";
     }
  
    //$lozinka=password_hash($lozinka,PASSWORD_DEFAULT);
    //$ponLozinka=password_hash($ponLozinka,PASSWORD_DEFAULT);

  

    
 
}







    

//$testEmail="majda@majda.com";
//$controller->provjeraLozinke($lozinka,$ponLozinka);



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