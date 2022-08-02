<?php 
// email validation using Regular expression in php

function valid_email($str) {
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}

if(!valid_email("test@example.com")){
    echo "Invalid email address.";
}else{
    echo "Valid email address.";
}



// password validation using Regular expression 

$password = "Dfkldfkd232323";
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);

if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
    // tell the user something went wrong
    echo "The password should be uppercase,lowercase,number and password most be 7 char";
}



// mail transfer: this code will not work because we can used smtp,http protocal for mail
$to = "abc@gmail.com";
$subject = "English note";
$message = "Hello i will send a english note";
$from = "xyz@gmail.com";


if(mail($to,$subject,$message)){
    echo "your mail has been sent";
}else{
    echo "your mail can't sent";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
