<!-- statement 
 if statement 
 if else if statement 
 if else if ladder statement
 switch statement  -->

<?php 
$condition = true;
$d = "";

// function show(){   
//     global $condition;
// if($condition){
//     $d = "condition is true";
// }else{
//     $d = "condition is false";
// }
// return $d;
// }

// $d = show();


// switch (2){
//     case 1:
//         echo "this is 1";
//         break;
//     case 2:
//         echo "this is 2";
//         break;
//     default:
//         echo "no found";
// }


// $cond1 = " ";//true
// $cond2 = "";//false
// $cond3 = '';//false
// $cond4 = null; //false;
// $cond5 = 1;//true 
// $cond6 = 0 //false

// if($cond5){
//     echo "true";
// }else{
//     echo "false";
// }

// $d = "";
// $days = 20;
// $day = ["sunday","monday","tuesday","wednesday","thuesday","friday","saturday"];
// foreach($day as $value){
//     if($day[$days]){
//        $d = $day[$days];
//     }else{
//        $d = "No day found";
//     }
// }
// echo $d;

// $day = 1;
// echo $day??"no variable defined";


// if(isset($day)){
//     echo $day;
// }else{
//     echo "no day found";
// }


// ternary operators 
// echo true ? "true":"false";
session_start();

$img = $_SESSION["img"];

echo $_SESSION["name"];
$arr = $_SESSION["desc"];

$d = "";
foreach($arr as $value){
  $d .= $value;
}

// echo $_COOKIE["krishna"];

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
    <!-- <h1><?=$d?></h1> -->
    <br><br>
    <p><?=$d?></p><br>
    <img src="<?=$img1?>" alt="">
</body>
</html>