<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  
</head>
<style>
  .form{
    display: flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
  }

</style>
<body>
  
<?php 
  require "./connect.php";


  // $sql = "  INSERT INTO persons (LastName,FirstName,Address,City)
  // VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Walling');";

  // $result = mysqli_query($con,$sql);
  
//   echo "<pre>";
// echo print_r($_GET);  

$fname = $lname = $address = $city = "";
$error = "";
if(isset($_GET['submit'])){
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$address = $_GET['address'];
$city = $_GET['city'];

if($fname == ""){
  $error = "fname is empty";
  $fempty = "";
}else if($lname == ""){
  $error = "lname is empty";
}else if($address == ""){
  $error = "address is empty";
}else if($city == ""){
  $error = "city is empty";
}else{
$sql = "INSERT INTO persons (LastName,FirstName,Address,City) VALUES('$lname','$fname','$address','$city')";
$result = mysqli_query($con,$sql);
$fname = "";
$lname = "";
$city = "";
$address = "";
// echo var_dump($result);
header('location:fetchdata.php');
if($result){
  echo '<script>alert("data inserted")</script>';
}else{
  echo "data is not inserted".mysqli_error($result);
}

}

echo "<script>alert($error)</script>";

}

?>

<form action="fetchdata.php" method="GET" class="form">
    <input type="text" value="<?php if($fname == ""){echo "";}else{echo $fname;} ?>" name="fname" placeholder="Enter your fname"><br>
    <input type="text" value="<?php if($lname == ""){echo "";}else{echo $lname;} ?>" name="lname" placeholder="Enter your lname"><br>
    <input type="text" value="<?php if($address == ""){echo "";}else{echo $address;} ?>" name="address" placeholder="Enter your address"><br>
    <input type="text" value="<?php if($city == ""){echo "";}else{echo $city;} ?>" name="city" placeholder="Enter your city name"><br>
    <button name="submit">sumbit</button>  
    <?php 
echo "<h1 style='text-align:center;'>$error</h1>"; ?>
  </form>


</body>
</html>
