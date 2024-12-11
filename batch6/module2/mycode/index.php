<?php

$ages = [16,17,18,19,20];

foreach ($ages as $age){

    echo "$age <br>"; 

    echo "age after 1 year". ++$age."<br/>";

    $newAge = (int)$age++ ;

    echo "age using post increment ".$newAge ."<br>" ;
    echo "real age using post increment ".$age ."<br>" ;

}


?>