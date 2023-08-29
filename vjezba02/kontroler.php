<?php
include "model.php";
include "view.php";

function obradiFormu()
{
    if(isset($_POST["a"]) && isset ($_POST["b"]))
    
{
$a=$_POST["a"];
$b=$_POST["b"];
}
    $rezultat=zbroji($a, $b);
    prikaziRezultat($rezultat);
}
?>