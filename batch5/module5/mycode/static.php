<?php


    function staticFunction(){
        static $i ;
        $i = $i?? 0 ;
        $i++;
        echo $i;
        echo "\n";
    }
    staticFunction();
    staticFunction();
    staticFunction();

?>