<?php
$name = $_POST['name'];
$Visitor_email= $_POST['email'];
$message = $_POST['message'] ; 

$email_from= 'nyarangigerry@gmail.com';

$email_subject ="New form submission";

$email_body ="User Name: $name.\n".
              "User Email: $Visitor_email.\n".
              "User message: $message.\n";

$to = "gerrykiboma@gmail.com"

$headers = "From: $email_from \r\n";

$headers ="Reply-To:$Visitor_email \r\n";

mail(sto,$email_subject,$email_body,$headers);

header("Location: index.html");

?>
