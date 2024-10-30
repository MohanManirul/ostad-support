<?php

class ParentClass {

    public static $myStaticProperty = 'Hello, World! \n';
    private $name ;

       static function myStaticMethod() {
       // echo $this->name = "Sidratul Muntaha Munazareen \n" ; //cann't accessible beacuse myStaticMethod() is a static method
        echo "This is a parent static method.  \n";
    }
}

class ChildClass extends ParentClass {
    
    static function myStaticMethod() {
        echo "Trying to override a parent static method.  \n";
        parent::myStaticMethod();
    }

    
}

ChildClass::myStaticMethod(); // called statically

$object = new ChildClass();
$object->myStaticMethod(); 