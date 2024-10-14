<?php
function printNumbers($n) {
    // Base case: If $n is less than 1, stop the recursion
    if ($n < 1) {
        return;
    }

    // Print the current number
    echo $n . " ";

    // Recursive case: Call the function with $n - 1
    printNumbers($n - 1);
}

// Example usage
printNumbers(5);  // Output: 5 4 3 2 1

function countDown( $a , $b ){
    for($x = $a ; $x <= $b ; $x++){
        echo $x."\n";

    }
}

countDown( 0 , 5 )
?>
