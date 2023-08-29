<?php


class BiljeskaView
{
    public function prikaziFormu()
    {
        echo '
        <form method="post">
        <input type="text" name="naslov">
        <textarea name="sadrzaj"></textarea>
        <input type="submit"  value="Send">
</form>
        
       ';
    }
    
    
    public function  prikaziBiljeske($biljeske)
    {
        foreach ($biljeske as $biljeska)
        {
            echo "<h2>{$biljeska['naslov']}</h2>";
            echo "<p>{$biljeska['sadrzaj']}</p>";
        }
    }
    
}






 

       


?>








