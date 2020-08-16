<?php

    mysqli_connect("localhost", "myfamilydatabase-31303737df", "agni#12345");

    if (mysqli_connect_error()) {
        
        echo "There was an error connecting to the database";
        
    } else {
        
        echo "Database connection successful!";
        
    }


?>