<?php
    $email = $_POST['email2'];
    $pass = $_POST['password2'];

    if($email=="" || $pass == ""){
        echo "Please enter the credentials";
    }
    else if(!str_contains($email,'@')){
        echo "Please enter a valid email";
    }
    else if(strlen($pass) <= 6){
        echo "Please enter a password more than 6 characters.";
    }
    else{
        echo "Welcome to our website";
    }
?>