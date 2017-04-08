<?php

if(isset($_POST['send'])) {
   // Prepare the email
$to = 'amanina_hadi@yahoo.com';

$name = $_POST['demo-name'];
$mail_from = $_POST['demo-email'];
   $subject = 'Message sent from website';
   $message = $_POST['demo-message'];

$header = "From: $name <$mail_from>";

   // Send it
   $sent = mail($to, $subject, $message, $header);
   if($sent) {
   echo 'Your message has been sent successfully!';
   } else {
   echo 'Sorry, your message could not send.';
   }
}
?>
