<?php

   include "Php.php"; 

//    $php = new Php();
//    $php->getFramework();

class phpChild extends Php{
    public static function getClass(){
        return __CLASS__;
     }
}

$php = new Php();
$php->framework();

$phpChild = new phpChild();
$phpChild->framework();
