<?php

    function logger($log){
        if(!file_exists('log.txt')){
            file_put_contents('log.txt',"w");
        }
        $ip = $_SERVER['REMOTE_ADDR']; //client ip
        $time = date('m/d/y h:iA',time());
        $contents = file_get_contents('log.txt'); 

        $contents .= "$ip\t$time\t$log\r" ;

        file_get_contents('log.txt',$contents); 

    }

?>