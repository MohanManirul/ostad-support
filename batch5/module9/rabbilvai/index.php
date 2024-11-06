<?php
/*


// Parse Error (Syntax Error)
ech "Hello World";






// Fatal Error
function demo(){
    echo 1+1;
}
demu();




// Warning Error
echo "Hello PHP";
include("file.php");






// Notice Error
$x = "Hello, World!";
echo $y;






// Deprecated Error
$lat=34;
$lon=118;
$sunrise=date_sunrise(time(),SUNFUNCS_RET_STRING,$lat,$lon);





//User Errors
if(1==2){
    echo "Hello";
}








*/
// ERROR HANDLE


function riskyFunction(){
    if(rand(0,1)===0){
        throw new Exception("risky function not working\n");
    }
    return "All is well";
}


try{
    echo riskyFunction();
}
catch(Exception $e){
    error_log($e->getMessage(),3,"error.log");
    echo " Please try again later";
}




*/

// Read a file
// $fileName="public/example.txt";
// $content = file_get_contents($fileName);
// echo $content;



// Write to a File

// $fileName="public/example.json";
// $content= "BBBBB";
// $data = json_encode($content, JSON_PRETTY_PRINT);
// file_put_contents($fileName,$data);


$data = [
    "name" => "asas",
    "email" => "johndoe@example.com",
    "age" => 30
];

$jsonData = json_encode($data, JSON_PRETTY_PRINT);

file_put_contents("data.json", $jsonData);

// Append to a File
// $fileName="example.text";
// $content= "ÄAAAAA";
// file_put_contents($fileName,$content,FILE_APPEND);




// Delete File

// $fileName="example.text";
// unlink($fileName);