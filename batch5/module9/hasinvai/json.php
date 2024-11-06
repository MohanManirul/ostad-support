<?php
// Step 1: Prepare your data
$data = [
    "name" => "John",
    "age" => 30,
    "city" => "New York"
];

// Step 2: Encode the data into JSON format
$jsonData = json_encode($data, JSON_PRETTY_PRINT);  // Use JSON_PRETTY_PRINT for readable formatting

// Step 3: Write the JSON string to a file
$file = 'data.json';  // Name of the file where data will be saved

if (file_put_contents($file, $jsonData)) {
    echo "JSON file created successfully.";
} else {
    echo "Failed to create JSON file.";
}
?>
