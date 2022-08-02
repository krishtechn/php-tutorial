<?php 
$v = "";
// if(isset($_POST["calculate"])){
//     $value = $_POST["factnum"];
//     function showfact($n){
//         $value = $n;
//         $fact = 1;
//         for ($i=$value; $i >= 1; $i--){
//             $fact = $fact * $i;
//         }
//        return $fact;
//     }

//     $v = showfact($value);
// }

// $value = $_POST["factnum"];
// $value = $_POST["email"];

// function fact($n){
//     $fact = 1;
//      for ($i=$n; $i >= 1; $i--){
//          $fact = $fact * $i; 
//      }
//      return $fact;
// }

// echo fact($value);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <Header class="navbar">
        <a href="#">Home</a>
        <a href="#">about</a>
        <a href="#">services</a>
    </Header>
    <div class="container">
        <form action="factorial.php" method = "post">
            <input type="number" name="factnum">
             <!-- check email is valid or not  -->

             <input type="email" name="email" placeholder="Enter your email">

            <button name="calculate">calculate</button>
            <h1><?php echo "The factorial number is ".$v; ?></h1>
        </form>
    </div>

    <Footer class="footer">
        <p class="text">copyright Technical krish</p>
</Footer>
</body>
</html>