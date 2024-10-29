<?php

class Language{

    private $category ;



    function setCategory($a){
        $this->category = $a ;
    }

    function getCategory(){
        return $this->category ;
    }

    // magic method clone
    public function __clone()
    {
       $lang = new Language() ;
       $lang->setCategory($this->category);
       return $lang ; 
    }



}

$java  = new Language();
$java->setCategory("OOP");



$php = clone $java ; // change here use clone 

$java->setCategory("New OOP");

echo $java->getCategory()."\n";


echo $php->getCategory()."\n";
