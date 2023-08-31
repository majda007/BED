<?php
//simulacija registracije u sustavu
$originalLozinka="lozinka123";
$hashLozinka=password_hash($originalLozinka,PASSWORD_DEFAULT);

//ispis hashirane lozinke
echo $hashLozinka;

//sada ide prijava -simulacija
$userInput="lozinka123";
//selech hash from baze where user nesto
if (password_verify($userInput,$hashLozinka))
{
    echo "Uspješna prijava";

}
else

{
    echo "Pogrešna lozinka";
}

//testirati kako radi sustav ako 2 korisnika imaju istu lozinku

$original1="lozinka123";
$original2="lozinka123";

//hash
$hash1=password_hash($original1, PASSWORD_DEFAULT);
$hash2=password_hash($original2, PASSWORD_DEFAULT);

echo "lozinka 1 ".$hash1."<br>";

echo "lozinka 2 ".$hash2."<br>";

if ($hash1!==$hash2)
{
    echo "dobro je";
}
else
{
    echo "ovo se ne smije ispisasti";
}

?>