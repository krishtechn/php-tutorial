<?php 
$conn = mysqli_connect("localhost","root","","practices");
if($conn){
    echo "success";
}

$sql = "INSERT INTO `school`(`fname`, `lname,`) VALUES ('janaki','kharal')";
$result = mysqli_query($conn,$sql);
if($result){
    echo "data inserted";
}

$select = "SELECT * FROM school";
$r = mysqli_query($conn,$select);
$num = mysqli_num_rows($r);


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
<?php

if($num >= 1){
 while($row = mysqli_fetch_assoc($r)){
        $fname = $row["fname"];
        $lname = $row["lname,"];
?>    
<h1><?php echo $fname; ?></h1>
<p><?php echo $lname; ?></p>
<?php 
}
}


?>

</body>
</html>