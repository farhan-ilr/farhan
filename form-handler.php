<?php
$name = $_POST['name'];
$vistor_email = $_POST['eMail'];
$subject = $_POST['Subject'];
$messege = $_POST['messege'];

$email_from = 'sajithac114@gmail.com';

$email_subject = 'New Form Submission From Web';

$email_body = "User Name   : $name.\n".
               "User Email : $vistor_email.\n".
               "Subject    : $subject.\n".
               "Messege    : $messege.\n"; 
               
$to = 'farhanilr4@gmail.com';

$headers = "From : $email_from \r\n";

$headers .= "Reply-to $vistor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html")
?>