<?php

spl_autoload_register(function($className) {
   $file = $className . '.php';
   if (file_exists($file)) {
      echo "$file je uspješno postavljen;
";
      include $file;
   } else {
      throw new Exception("Ne mogu se spojiti $className.");
   }
});
try {
   $obj1 = new DB();
} catch (Exception $e) {
   echo $e->getMessage(), "
";
}

?>


?>