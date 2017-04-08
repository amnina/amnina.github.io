 <?php

$errors = '';
if(empty($_POST['name'])  ||
   empty($_POST['email']) ||
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}
if(isset($_POST['submit'])) {
     $to ='amanina_hadi@yahoo.com';
     $from =  $_POST['email'];
     $subject = 'Message from Website';
     $message = $_POST['message'];
    $headers = "From: $from\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    if(mail($to, $subject, $message, $headers)){
        echo 'Your message has been sent successfully!';
    }
    else{
        echo 'Sorry, your message could not send.';
    }
}
?>
