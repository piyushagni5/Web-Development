<?php

    session_start();

    if (array_key_exists('email', $_POST) OR array_key_exists('password', $_POST)) {
        
        $link = mysqli_connect("localhost", "cl29-users-bzh", "YTTMcfhK.", "cl29-users-bzh");

            if (mysqli_connect_error()) {
        
                die ("There was an error connecting to the database");
        
            } 
        
        
        if ($_POST['email'] == '') {
            
            echo "<p>Email address is required.</p>";
            
        } else if ($_POST['password'] == '') {
            
            echo "<p>Password is required.</p>";
            
        } else {
            
            $query = "SELECT `id` FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";
            
            $result = mysqli_query($link, $query);
            
            if (mysqli_num_rows($result) > 0) {
                
                echo "<p>That email address has already been taken.</p>";
                
            } else {
                
                $query = "INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";
                
                if (mysqli_query($link, $query)) {
                    
                    $_SESSION['email'] = $_POST['email'];
                    
                    header("Location: session.php");
                    
                } else {
                    
                    echo "<p>There was a problem signing you up - please try again later.</p>";
                    
                }
                
            }
            
        }
        
        
    }

    


?>

<form method = "post">

    <input name="email" type="text" placeholder="Email address">
    
    <input name="password" type="password" placeholder="Password">
    
    <input type="submit" value = "Sign up">

</form>