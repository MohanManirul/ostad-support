<?php
    //Fatal error: Cannot declare class Java, because the name is already in use in 
    
    include "Java.php";
    include "Php.php";
    include "Ruby.php";
    
    new Java\Java();
    new Live\Java\Java();
    new Ruby();

    echo "hello";

?>