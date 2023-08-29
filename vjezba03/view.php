
<?php

function prikaziBiljeske($biljeske)
{

foreach($biljeske as $biljeska)
{
    echo "<h2>{$biljeska['naslov']}</h2>";
    echo "<p>{$biljeska['sadrzaj']}</p>";
}

}

function prikaziFormu()
{
    ?>
    <form action="index.php" method="POST">
Naslov: <input type="text" name="naslov" required ><br></br>
Sadrzaj: <textarea name="sadrzaj" ></textarea>
<input type="submit"  value="Send">
</form>

<?php
}
   
?>