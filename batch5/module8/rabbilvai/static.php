<?php

//In PHP, you cannot declare a class itself as static. However, you can have static properties and methods within a class. 

class ParentClass {
    public static $myStaticProperty = 'Hello, World! \n';

      static function myStaticMethod() {
        echo "This is a parent static method.  \n";
    }
}

echo ParentClass::$myStaticProperty;
echo ParentClass::myStaticMethod();

class ChildClass extends ParentClass {
    // This will cause an error because the display method is static
    static function myStaticMethod() {
        echo "Trying to override a parent static method.  \n";
        parent::myStaticMethod();
    }

    
}

// Usage
$object = new ChildClass();
$object->myStaticMethod();  // This will not work due to the error
?>
