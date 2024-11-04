<?php

$filename = "/laragon/www/support/batch5/module9/mycode/f1.txt";

// Check if the file is readable
if (is_readable($filename)) {
    // Open the file for reading
    $fp = fopen($filename, 'r');
    while ($line = fgets($fp)) {
        echo $line;
    }

    rewind($fp);

    fseek($fp, -1, SEEK_END);
    fseek($fp, -1, SEEK_END);

    while ($line = fgets($fp, 5)) {
        echo $line . "-";
    }

    // Read the file contents as an array
    $data = file($filename); 
    $data = file_get_contents($filename);
    print_r($data);

    // Get and display the current directory
    echo "Current working directory: " . getcwd();

} else {
    echo "File is not readable. Attempting to change permissions...\n";

    // Attempt to change permissions to make it readable
    if (chmod($filename, 0644)) {
        echo "Permissions changed successfully.\n";
    } else {
        echo "Failed to change permissions.\n";
    }
}

?>
