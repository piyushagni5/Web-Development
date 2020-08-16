<?php

    if(is_numeric($_GET['number']) && $_GET['number'] > 0 && $_GET['number'] == round($_GET['number'], 0)){
        
        $i = 2;
        
        $isPrime = true;
        
        while ($i < $_GET['number']) {
            
            if ($_GET['number'] % $i == 0) {
                
                // Number is not prime!
                
                $isPrime = false;
                
            }

            $i++;
            
        }
        
        if ($isPrime) {
            
            echo "<p>".$i." is a prime number!</p>";
            
        } else {
            
            echo "<p>".$i." is not prime.</p>";
            
        }  
        
    } else if ($_GET) {
        
        // User has submitted something which is not a positive whole number
        
        echo "<p>Please enter a positive whole number.</p>";
        
    }

?>

<p>Please enter a whole number.</p>

<form>

    <input name="number" type="text">
    
    <input type="submit" value="Go!">
    
</form>