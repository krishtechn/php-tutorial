<?php 
// an array is a collection of similar data type an array is based on index the first element of
// array is placed at 0 position and second is at 1. an array index from 0 and goes to array length-1 
// the element is store in array in a ascending order. 
// there are three type of array in php
// index array 
// associative array 
// multidimensional array 

// echo "<pre>";
// echo var_dump($arr);
// echo $arr[0] . "<br> " .$arr[1];
// echo count($arr);//length of array 

// accessing array using foreach loop 

// $data = "";
// foreach($arr as $value){
//     $data .= $value;
// }
// $arr = array("Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.","Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.","Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.","Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.","Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercitationem.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio quos nisi minus inventore qui porro illum, ipsa ad sed necessitatibus, quam mollitia aspernatur a iure aut dolore eaque suscipit exercit");

// function showdata($arr){
//  foreach($arr as $value){
//      if($value == ""){
//          echo "<p>empty data</p>";
//      }else{
//          echo "<p>.$value.</p>";
//      }
//  }
// }

// showdata($arr);
// $arrs = array(1,3,4,5,"");
// showdata($arrs);


// $arr = [1,2,3,"krish",["kharal",1,23]];
// echo "<pre>";
// $arr[1] = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda nobis optio veritatis cumque. Delectus omnis labore, doloribus error architecto inventore fugiat ad repellendus similique? Quos dolore culpa sint blanditiis. Ex.";

// $arr = array('name'=>"krish",'id'=>1,"voter"=>true);
// print_r($arr);
// $arr["name"] = "krishna";
// echo $arr["name"];

// foreach($arr as $key=>$value){
//     echo "your $key is $value <br/>";
// }

// $arr = array("<h1>how to learn computer</h1>","Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident officia facilis eligendi nemo sint tempore quia officiis incidunt, quisquam optio vitae expedita laudantium veritatis saepe dignissimos quam commodi. Consequatur, nulla.","<h1>how to learn programming</h1>","Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident officia facilis eligendi nemo sint tempore quia officiis incidunt, quisquam optio vitae expedita laudantium veritatis saepe dignissimos quam commodi. Consequatur, nulla.");
// // print_r($arr);

// for($i=0; $i < count($arr); $i++){
//     echo $arr[$i];
// }

// function show($name = "krish"){
//     // default value is set to krish 
//     echo $name;
// }

// show();


// function global and local variable 
// $fname = "krishna";
// function show(){
//     global $fname;
//     $lname = "gaihre";
//     echo $fname . " ".$lname;
// }

// function show($name){
//     echo $name;
// }

// show($fname);
// echo $lname;


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
    <!-- <?=$data?></p> -->
</body>
</html>