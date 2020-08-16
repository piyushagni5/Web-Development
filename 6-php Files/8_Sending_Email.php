<?php

    $emailTo = "";

    $subject = "I hope this works!";

    $body = "I think you're great!";

    $headers = "From: rob@robpercival.co.uk";

    if (mail($emailTo, $subject, $body, $headers)) {
        
        echo "The email was sent successfully";
        
    } else {
        
        echo "The email could not be sent.";
        
    }


?>


