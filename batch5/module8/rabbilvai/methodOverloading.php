<?php
//In PHP, method overloading allows you to define multiple methods with the same name but different parameters in the same class. 

class Gadha{

    // __call, __callStatic
    public function __call($name, $arguments)
    {
        print_r($arguments);
    }


}

$objGadha= new Gadha();
$objGadha->Rohima("A");
$objGadha->Jorina("A","B");
$objGadha->Katrina("A","B","D");