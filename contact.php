 <?php 
if(isset($_POST['submit'])) {
     $to ='amanina_hadi@yahoo.com';
     $from =  $_POST['demo-email'];
     $subject = 'Message from Website';
     $message = $_POST['demo-message'];
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
