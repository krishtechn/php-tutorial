<?php 
include 'connect.php';
include 'insertdata.php';


//update data



$sql = "SELECT * FROM persons";
$nodata = "";
$result = mysqli_query($con,$sql);

$num = mysqli_num_rows($result);

// echo "<pre>";
// echo var_dump($_GET);

if(isset($_GET['type'])){
    if($_GET['type'] == 'delete'){
        $id = $_GET['id'];
        $sqldelete = "DELETE FROM persons where PersonID = $id";
        mysqli_query($con,$sqldelete);
        header('location:fetchdata.php');
    }
}

if(isset($_GET['type'])){
    if($_GET['type']=='edit'){
        
$fnames = $lnames = $addresss = $citys = "";
$error = "";
if(isset($_GET['update'])){
$fnames = $_GET['fnames'];
$lnames = $_GET['lnames'];
$addresss = $_GET['addresss'];
$citys = $_GET['citys'];
}
        ?>
        <h1 style='text-align:center;'>update form</h1>
  <form action="fetchdata.php" method="GET" class="form">
    <input type="text" name="fnames" placeholder="Enter your fname"><br>
    <input type="text" name="lnames" placeholder="Enter your lname"><br>
    <input type="text" name="addresss" placeholder="Enter your address"><br>
    <input type="text" name="citys" placeholder="Enter your city name"><br>
    <button name="update">update</button>  
    </form>
        <?php 
        $id = $_GET['id'];
        echo $id;
        $updatsql = "UPDATE `persons` SET `LastName`='$lnames',`FirstName`='$fnames',`Address`='dfkdkf',`City`='$citys' WHERE PersonID = $id;";
        mysqli_query($con,$updatsql);
    }else{
        header('location:fetchdata.php');
    }
}

// echo $num;

echo '<pre>';
// echo var_dump($result);
?>

<table class="table table-striped">
<tr class="table-primary">
<th class="table-primary">#</th>
<th class="table-primary">Fname</th>
<th class="table-primary">Lname<th>
<th class="table-primary">Address</th>
<th class="table-primary">City</th>
<th class="table-primary">Operation</th>
<th class="table-primary">Operation</th>
</tr>

<?Php 
if($num >= 1){
    $ids  = 0;
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['PersonID'];
        $ids = $ids + 1;
      
        $LastName = $row['LastName'];
        $FirstName = $row['FirstName'];
        $Address = $row['Address'];
        $City = $row['City'];
        ?>

<tr class="table-primary">
<td class="table-primary"><?php echo $id; ?></td>
<td class="table-primary"><?php echo $FirstName; ?></td>
<td class="table-primary"><?php echo $LastName; ?><td>
<td class="table-primary"><?php echo $Address; ?></td>
<td class="table-primary"><?php echo $City; ?></td>
<td class="table-primary"><a href="?type=delete&id=<?php echo $id; ?>">delete</a></td>
<td class="table-primary"><a href="?type=edit&id=<?php echo $id; ?>">edit</a></td>
</tr>
<?php 
    }
}else{
    $nodata = "No data found";
}
?>
</table>



<?php echo "<h1 style='color:red;text-align:center;'>$nodata</h1>"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
</body>
</html>