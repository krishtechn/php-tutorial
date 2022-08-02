<?php 

echo "<pre>";
print_r($_FILES);


if(isset($_POST["upload"])){

    print_r($_FILES);

// $name = $_FILES["file"]["name"];
// $tmpname = $_FILES["file"]["tmp_name"];


// single file uploaded 
/*
if(move_uploaded_file($tmpname,"./image/".$name)){
    echo "file uploaded successfully";
}else{
    echo "file can't uploaded";
}
*/


// upload multiple image 
$name = $_FILES["file"]["name"];
$tmpname = $_FILES["file"]["tmp_name"];

for($i=0; $i < count($name); $i++){
    $img = $name[$i];
    $tmp = $tmpname[$i];
    move_uploaded_file($tmp,"./image/".$img);
}


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
    <form action="07_single_multiple_Files_Upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file[]" multiple>
        <button name="upload">Upload</button>
    </form>
</body>
</html>