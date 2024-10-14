<?php
/* Login Task
 * User Name Validation
 * Password Validation
 * User Name and Password Validation
 * User Login
 */ 
 

 
function userLogin($userName, $password){
   
   
    if(validUserName($userName)){
        echo $userName ;
        echo "Fail User Name";
    } elseif(validPassword($password)){
        echo "Fail Password";
    } elseif(!matching($userName, $password)){
        echo "Username and Password not matching";
    } else{
        login();
    }
}




function validUserName($userName){
    if(empty($userName)){
        return $userName;
    } else{
        return false;
    }
}
echo validUserName("Admin");


function validPassword($password){
    if(empty($password)){
        return true;
    } else{
        return false;
    }
}

function matching($userName, $password){
    if($userName == "Admin" && $password == "123"){
        return true;
    } else{
        return false;
    }
}

function login(){
    echo "Login Successfully";
}


userLogin("Admin", "123");