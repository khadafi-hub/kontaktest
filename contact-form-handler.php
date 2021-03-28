<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'ddafi272@gmail.com';
    
    $email_subject = "Now Form Submission";
    
    $email_body = "User Name: $name.\n".
                     "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

    $to = "khadafikhadafi0@gmail.com"

    $headers = "From: $email_from\r\n";

    $headers = "Replay-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body, $headers);

    header("Location: index.html")



?>
