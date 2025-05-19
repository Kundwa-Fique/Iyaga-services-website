<?php 
$name = S_POST['name'];
$visitor_email = S_POST['email'];
$phone_number = S_POST['phone'];
$message = S_POST['message'];
 
$email_from='iyagaservicescompanyltd@gmail.com';

$email_subject='new form submission'
 
$email_body="user name:$name.\n".
             "User email:$email.\n".
             "Phone number:$phone.\n".
             "user Message:$message.\n";
$to='kundwafique23@gmail.com';

$headers="from: $email_from \r\n";

$headers.="Reply-to: $visitor_email \r\n";

email($to,$email_subject,$email_body,$headers);
header("location: contact.html");
?>