<?php

include "database.php";
function dohvatiSveBiljeske()
{
    global $pdo;

    $stmt=$pdo->query("select * from biljeska");
    return $stmt->fetchAll();
}

function dodajBiljesku($naslov, $sadrzaj)
{
    global $pdo;
    $stmt=$pdo->prepare("insert into biljeska(naslov, sadrzaj) values (:naslov, :sadrzaj)");
    $stmt->bindParam(":naslov", $naslov);
    $stmt->bindParam(":sadrzaj", $sadrzaj);
    $stmt->execute();
}






?>