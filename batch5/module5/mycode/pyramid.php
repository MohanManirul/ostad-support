<?php
// Number of rows for the pyramid
$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    // Print spaces
    for ($j = $i; $j < $rows; $j++) {
        echo "&nbsp;&nbsp;";  // Two spaces for formatting
    }
    
    // Print stars
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "* ";
    }
    
    // Move to the next line
    echo "<br/>";
}
?>
