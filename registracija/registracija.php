<?php
class RegistracijaView
{
    public function prikaziFormu()
    {
       

        echo '
        <form method="post" action="index.php">
       Ime: <input type="text" name="ime" required><br><br>
       Prezime: <input type="text" name="prezime" required><br><br>
       Email:<input type="email" name="email" required><br><br>
       Lozinka:<input type="password" name="lozinka" required><br><br>
        Ponovljena lozinka: <input type="password" name="ponovljenalozinka" required><br><br>
        <input type="submit" value="submit">
        </form>
        
        ';
    }

    public function prikaziKorisnike($korisnici)
    {
        foreach ($korisnici as $korisnik)
        {
        echo "<h2>{$korisnik['ime']}</h2>";
        echo "<p>{$korisnik['prezime']}</p>";
        echo "<p>{$korisnik['email']}</p>";
        echo "<p>{$korisnik['lozinka']}</p>";
    }
}
}
?>