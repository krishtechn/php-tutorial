<?php 

// $arr = ["krish","kharal",1,2,3];
// echo "<pre>";
// print_r($arr);

// echo "The array element at index 0 is ".$arr[0];
// echo count($arr);

// $arr[0] = 1;
// echo var_dump($arr);

// $arr = array(1,3,2,4,5,6);
// // echo var_dump($arr);
// // echo $arr[0];

// for ($i=0; $i<count($arr); $i++){
//     echo "<h3>The array element is $arr[$i]</h3>";
// }


// $arr = [];
// $arr[0] = 34;
// $arr[1] = 45;
// echo var_dump($arr);


// $arr = ["krish","kharal"];
// $data = $arr;
// echo var_dump($data);


// associative array
$arr = array("fname"=>"krishna","lname"=>"kharal");
echo var_dump($arr);

echo $arr["fname"];

// foreach($arr as $value){
//     echo "<br>";
//     echo "The array element is $value"."<br>";
// }


foreach($arr as $key => $value){
    echo "your $key is: $value"."<br>";
}



?>