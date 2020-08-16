<?php

$family = array("Rob", "Kirsten", "Tommy", "Ralphie");

foreach ($family as $key => $value) {
    
    $family[$key] = $value." Percival";
    
    echo "Array item ".$key." is ".$value."<br>";
    
}



for ($i = 0; $i < sizeof($family); $i++) {
    
    echo $family[$i]."<br>";
    
}



for ($i = 10; $i >= 0; $i--) {
    
    echo $i."<br>";
    
}

$i = 0;
while(i<=5){
	echo $i."<br>";
	$i++;
}


?>