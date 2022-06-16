<?php
$name = $_POST['name'];
$Visitor_email=$_POST['email'];
$Subject=$_POST['subject'];
$message=$_POST['message'];



$email_from = 'info@yourwebsite,com';


$email_subject = 'New Form Submission';

$email_body = "User Name: $name .\n".
                "User Email: $Visitor_email .\n".
                "Subject: $Subject .\n".
                "User message: $message .\n";


        $to='abo.reda19998@gmail.com ';


$headers = "From: $email_from \ r\n";

$headers .="Reply-To : $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");
?>