<?php

$a = readline('Enter a string: '); 

echo $a; 



// echo "Enter something: ";
// $input = fgets(STDIN); // Read input from the console
// echo "You entered: " . trim($input) . "\n"; // Display the input


// echo "Enter your name and age (e.g., John 25): ";
// $input = fgets(STDIN); // Read input from the console

// // Use sscanf to parse the input
// sscanf($input, "%s %d", $name, $age);

// echo "Name: " . $name . "\n";
// echo "Age: " . $age . "\n";

<?php
// php://stdin থেকে ইনপুট পড়ুন
$input = file_get_contents('php://stdin');
parse_str($input, $_POST);

// $_POST অ্যারে ব্যবহার করে ডাটা অ্যাক্সেস করুন
print_r($_POST);
?>

?>
