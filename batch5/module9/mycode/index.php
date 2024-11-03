<?php

$filename = "/laragon/www/support/batch5/module9/mycode/f1.txt";
$fp = fopen($filename,'r');
while($line = fgets($fp)){
    echo $line ;
}

rewind($fp);

fseek($fp,-1,SEEK_END);

fseek($fp,-1,SEEK_END);

while($line = fgets($fp,5)){
    echo $line."-" ;
}

$data = file($filename); // print as array
$data = file_get_contents($filename);
print_r($data);
// echo $data ;



?>