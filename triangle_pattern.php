<?php
// Loop for rows
for ($row = 0; $row <= 7; $row++)
{
    // Loop for columns
    for ($column = 0; $column <= 7; $column++)
    {
        // Condition to determine if '*' or ' ' should be printed
        if ((($column == 1 or $column == 5) and $row != 0) or (($row == 0 or $row == 3) and ($column > 1 and $column < 5)))
            echo "*";    // Print '*' if conditions are met
        else  
            echo " ";    // Print ' ' if conditions are not met
    }        
    echo "<br/>";  // Move to the next line after each row is printed
}
?>
