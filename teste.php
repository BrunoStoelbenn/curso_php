<?php

    $receiver = "brunostoelbenn@gmail.com";
    $subject = "Email test via php using localhost";
    $body = "Hi, there... This is a test email send from Localhost.";
    $sender = "from:brunocassiano.stoelbenn@gmail.com";

    if(mail($receiver, $subject, $body, $sender)){
        echo "Email sent successfully to $receiver";
    }
    else {
        echo "Sorry, failed while sending mail!";
    }
?>