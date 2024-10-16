<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print O S T A D</title>
</head>
<body>

<pre>
<?php
// Function to print O
function printO() {
    for ($i = 0; $i < 5; $i++) {
        if ($i == 0 || $i == 4) {
            echo "  ***  \n";
        } else {
            echo " *   * \n";
        }
    }
}

// Function to print S
function printS() {
    echo "  ***  \n";
    echo " *     \n";
    echo "  ***  \n";
    echo "     * \n";
    echo "  ***  \n";
}

// Function to print T
function printT() {
    echo " ***** \n";
    for ($i = 0; $i < 4; $i++) {
        echo "   *   \n";
    }
}

// Function to print A
function printA() {
    echo "   *   \n";
    echo "  * *  \n";
    echo " ***** \n";
    echo " *   * \n";
    echo " *   * \n";
}

// Function to print D
function printD() {
    echo " ****  \n";
    for ($i = 0; $i < 3; $i++) {
        echo " *   * \n";
    }
    echo " ****  \n";
}

// Calling the functions to print "OSTAD"
printO();
echo "\n";
printS();
echo "\n";
printT();
echo "\n";
printA();
echo "\n";
printD();
?>
</pre>

</body>
</html>
