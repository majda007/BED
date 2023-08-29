<?php

include "model.php";
include "view.php";

function prenesiTrenutnoVrijeme()
{
    $vrijeme=dohvatiTrenutnoVrijeme();
    prikaziVrijeme($vrijeme);
}


?>