<?php

    if(isset($POST['submit'])){
        $name = $_POST['name'];
        $visitor_email = $_POST['email'];
        $message = $_POST['message'];
        
        $to = "khadafikhadafi0@gmail.com"

        $email_subject = "New Form Submission";

        $headers = "From: ".$visitor_email;

        $headers = "Reply-To: ".$visitor_email;


        $email_body = "User Name: ".$name.".\n".
                         "User Email: ".$visitor_email.".\n".
                            "User Message: ".$message.".\n";




        mail($to, $email_subject, $email_body, $headers)
        header("Location: index.html?mailsend")
    
    }
        
        
        
    



?>
