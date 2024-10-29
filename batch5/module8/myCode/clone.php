<?php

class Language{

    private $category ;



    function setCategory($a){
        $this->category = $a ;
    }

    function getCategory(){
        return $this->category ;
    }




}

$java  = new Language();
$java->setCategory("OOP");



$php = clone $java ; // change here use clone , deep clone hoi na

$java->setCategory("New OOP");

echo $java->getCategory()."\n";


echo $php->getCategory()."\n";
