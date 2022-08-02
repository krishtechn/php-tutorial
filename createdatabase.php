<?Php 
include "./connect.php";


$sql = "CREATE DATABASE mydbs";
$result = mysqli_query($con,$sql);

echo var_dump($result);

if($result){
    echo "<h1>database created successfully</h1>";
}else{
    echo "<h1>database is not created</h1>";
}

?>