<?php

// $a = readline('Enter a string: '); 
  
// For output 
// echo $a; 



// echo "Enter something: ";
// $input = fgets(STDIN); // Read input from the console
// echo "You entered: " . trim($input) . "\n"; // Display the input


echo "Enter your name and age (e.g., John 25): ";
$input = fgets(STDIN); // Read input from the console

// Use sscanf to parse the input
sscanf($input, "%s %d", $name, $age);

echo "Name: " . $name . "\n";
echo "Age: " . $age . "\n";


?>
