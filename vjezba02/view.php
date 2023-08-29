
<?php

function prikaziFormu()
{
    ?>
    <form action="index.php" method="POST">
Prvi Broj: <input type="number" name="a" required ><br></br>
Drugi Broj: <input type="number" name="b" required ><br></br>
<input type="submit"  value="Send">
</form>

<?php
}

function prikaziRezultat($rezultat)
{
    echo "Rez je ".$rezultat;
}
?>