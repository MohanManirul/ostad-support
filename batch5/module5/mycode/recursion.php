<?php
	function printN($i){
    	if($i >= 10){
        	return ;
        
        }
    
    	echo $i."\n";
        $i++;
        printN($i);
    
    }
    printN(3);

?> 
