<?php



try{
    $a=10;
    echo $b;
}
catch(Exception $e){
    error_log($e->getMessage(),3,"error.log");
    echo "Something wrong";
}


