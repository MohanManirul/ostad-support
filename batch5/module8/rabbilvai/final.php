<?php
class BaseClass {
    final public function display() {
        echo "This is a final method.";
    }
}

class ChildClass extends BaseClass {
    // This will cause an error because the display method is final
    public function display() {
        echo "Trying to override a final method.";
    }
}

// Usage
$object = new ChildClass();
$object->display();  // This will not work due to the error
?>
