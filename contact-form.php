<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];

$email_subject="New Message";
$email_body="User Name: $name.\n"."User Email: $visitor_email.\n"."User message: $message.\n";
$to="vummadi77@gmail.com";

mail($to,$email_subject,$email_body);

header("Location: index.html"); 
  
exit;

?>