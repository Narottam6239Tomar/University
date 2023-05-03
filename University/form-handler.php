<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='narottamtomar503@gmail.com';

$email_subject='New Form Submission';

$email_body="User Name:$name.\n".
            "User Name:$visitor_emai.\n".
            "User Name:$subject.\n".
            "User Name:$message.\n";

$to='adarsh6239tomar@gmail.com';

$headers="From:$email_from\r\n;

$headers .= "Reply-To:$visitor_email\r\n";


mail($to,$email_subjec,$email_body,$headers);

header("Location:contact.html");


?>