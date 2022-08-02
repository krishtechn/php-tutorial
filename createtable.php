<?php 
 include "connect.php";

 $sql = "CREATE TABLE Persons (
    PersonID int,
    LastName varchar(255),
    FirstName varchar(255),
    Address varchar(255),
    City varchar(255)
);";

 $result = mysqli_query($con,$sql);

 if($result){
     echo "table create successfully";
 }else{
    echo "table is not create successfully".mysqli_error($result);
 }

?>