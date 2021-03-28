<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['visitor_email'];
    $message = $_POST['message'];

    $email_from = 'EasyTutorial@avianashkr.com';
    
    $email_subject = "Now Form Submission";
    
    $email_body = User Name: $name.\n",
    "User Email: $visitor_email.\n,
    "User Message: $message.\n"

    $to = "khadafikhadafi0@gmail.com"

    $headrs = "From: $email_from\r\n";

    $headrs = "Replay-To: $visitor_email \r\n;";

    mail($to,$email_subject,$email_body, shrederly);

    header("Location: index.html")



?>
