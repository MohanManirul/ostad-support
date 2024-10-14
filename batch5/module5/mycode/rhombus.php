<?php
function printRhombus($n) {
    // Upper part of the rhombus
    for ($i = 1; $i <= $n; $i++) {
        // Printing spaces
        for ($j = $i; $j < $n; $j++) {
            echo "&nbsp;&nbsp;";
        }
        // Printing stars
        for ($j = 1; $j <= (2 * $i - 1); $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    
    // Lower part of the rhombus
    for ($i = $n - 1; $i >= 1; $i--) {
        // Printing spaces
        for ($j = $n; $j > $i; $j--) {
            echo "&nbsp;&nbsp;";
        }
        // Printing stars
        for ($j = 1; $j <= (2 * $i - 1); $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}

// Call the function with the number of rows
printRhombus(5);
?>
