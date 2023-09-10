<?php
$to = 'majda@majda.com';
$subject = 'Testna poruka';
$message = 'Ovo je testna poruka';
$headers = 'From: sender@test.com' . "\r\n" .
    'Reply-To: webmaster@test.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

echo "Poruka poslana.";
?>
