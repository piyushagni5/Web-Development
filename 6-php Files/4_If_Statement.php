<?php

$user = "andy";

if ($user == "rob") {
    
    echo "Hello Rob!";
    
} else {
    
    echo "I don't know you";
    
}

echo "<br><br>";

$age = 16;

if ($age >= 18 || $user == "rob") {
    
    echo "You may proceed...";
    
} else {
    
    echo "You are too young, sorry!";
    
}

?>