<?php

    if ($_POST) {
        
        $family = array("Rob", "Kirsten", "Tommy", "Ralphie");
        
        $isKnown = false;
        
        foreach ($family as $value) {
            
            if ($value == $_POST['name']) {
                
                $isKnown = true;
                
            }  
            
        }
        
        if ($isKnown) {
            
            echo "Hi there ".$_POST['name']."!";
            
        } else {
            
            echo "I don't know you.";
            
        }      
        
    }


?>



<form method="post">

    <p>What is your name?</p>
    
    <p><input type="text" name="name"></p>
    
    <p><input type="submit" value="Submit"></p>


</form>
