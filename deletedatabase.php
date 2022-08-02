<?php 
include "./connect.php";

$sql = "DROP DATABASE mydbs";
$result = mysqli_query($con,$sql);

if($result){
    echo "database deleted successfully";
}else{
    echo "database already deleted successfully";
}

?>