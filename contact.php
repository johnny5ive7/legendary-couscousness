<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'Unbrideled Sprit Equine Ministry';
    $email_subject = 'New Message from Unbrideled Spirit';
    $email_body = "Name: $name.\n".
                  "Email: $email.\n".
                  "Message: $message.\n";

    $to ="you@youremail.com";
    $headers = "From: $email_from \r\n";
    $headers = "Reply-To: $email \r\n";

    mail($to,$email-subject,$email_body,$headers);

    header("location: success.html")              
 ?>
