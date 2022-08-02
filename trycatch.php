<?php 
// echo "try and catch";

function multiply($num1,$num2){
    if($num1 || $num2) throw new Exception("$num1 and $num2 throw exception");
    return $num1 * $num2;
}

try{
    echo "The multiplication between two number is:".multiply(3,4);
    $con = new mysqli("localhost","","","");
    echo "inside try <br/>";
}catch(Exception $error){
    echo $error->getMessage();
    // echo $error->getCode();
    if($error->getCode() < 2000){
        echo "database access is incorrect";
    }
}finally{
    echo "final keyword run";
}

?>