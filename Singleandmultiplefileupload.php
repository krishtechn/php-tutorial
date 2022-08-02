<?php
include 'connect.php';



if($_SERVER['REQUEST_METHOD']=="POST"){

    // single file upload 
// $imgname = $_FILES["file"]["name"];
// $tmp = $_FILES["file"]["tmp_name"];
// move_uploaded_file($tmp,"./image/".$imgname);


// multiple file upload
$file = $_FILES['file']["name"];
$tmpname = $_FILES['file']["tmp_name"];


for ($i=0; $i<count($file); $i++){
  $img = $file[$i];
  $tmp = $tmpname[$i];
  move_uploaded_file($tmp,"./image/".$img);
}


// foreach($file as $d){
//   echo "<img src='.$d.' alt=''/>";
// }


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
    <form action="fileupload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file[]" multiple>
        <button name="upload">fileupload</button>
    <img src="profile.jpg" alt="">
    <img src="./image/<?php echo $imgname ?>" alt="">
    </form>
</body>
</html>