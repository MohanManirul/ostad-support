<?php

$marks = 77;

switch(true){

    case ($marks <= 100 && $marks >= 80):
        echo "A+";
    break;    

    case ($marks < 80 && $marks >= 70):
        echo "A";
    break;    

    case ($marks < 70 && $marks >= 60):
        echo "A-";
    break;  

    case ($marks < 60 && $marks >= 50):
        echo "B";
    break;

    case ($marks < 50 && $marks >= 40):
        echo "C";
    break; 

    case ($marks < 50 && $marks >= 33):
        echo "D";
    break;   

    default:
        echo "F";
    break;    
        
}



$marks = 77;

$result = ($marks <= 100 && $marks >= 80) ? "A+" :
          ($marks < 80 && $marks >= 70) ? "A" :
          ($marks < 70 && $marks >= 60) ? "A-" :
          ($marks < 60 && $marks >= 50) ? "B" :
          ($marks < 50 && $marks >= 40) ? "C" :
          ($marks < 50 && $marks >= 33) ? "D" :
          "F";

echo $result;