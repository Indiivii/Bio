<?php
       // from the form
       $firstname = trim(strip_tags($_POST['firstname']));
       $lastname = trim(strip_tags($_POST['lastname']));
       $country = trim(strip_tags($_POST['country']);
       $subject = htmlentities($_POST['subject']);

       // set here
       $subject = "Contact form submitted!";
       $to = 'indigo.violet.x@gmail.com.com';

       $body = <<<HTML
$message
HTML;

       $headers = "From: $email\r\n";
       $headers .= "Content-type: text/html\r\n";

       // send the email
       mail($to, $subject, $body, $headers);

       // redirect afterwords, if needed
       header('Location: thanks.html');
?>