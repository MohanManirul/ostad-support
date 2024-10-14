<?php

    function addTemplate($a , $b){
       return $c = $a + $b ; // ekhane zodi retun na kori kaj korbe na
    }


    function add($a , $b){
       return addTemplate($a , $b) ;
    }

   echo add(5,8) ;

?>