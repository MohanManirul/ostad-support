<?php
// Specify the file path and name
$filename = "example.txt";

// Open the file for writing ('w' mode). If the file doesn't exist, it will be created.
// 'w' mode truncates the file to zero length if it exists, otherwise creates a new file.
$file = fopen($filename, "w");

if ($file) {
    // Data to write into the file
    $text = "dfdf";

    // Write the data to the file
    fwrite($file, $text);

    // Close the file after writing
    fclose($file);

    echo "File '$filename' created and data written successfully!";
    file_put_contents('example.txt',$text);
} else {
    echo "Unable to open or create the file.";
}
?>
