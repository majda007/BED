<?php

spl_autoload_register(function($className) {
   $file = $className . '.php';
   if (file_exists($file)) {
      echo "$file je uspješno postavljen;
";
      include $file;
   } else {
      throw new Exception("Unable to load $className.");
   }
});
try {
   $obj1 = new DB();
   $obj2 = new test10();
} catch (Exception $e) {
   echo $e->getMessage(), "
";
}

?>


?>