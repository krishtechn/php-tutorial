<?php 
  $define = "In php , a variable can start with $ sign flow by a variable name. php is a losely type programming language so we don't define the datatype of the variable we can used asignment operator to asign value to the different variable.";
  $name = "krishna kharal"; 
  echo $name;
  $Name = "Nabin kharal";
  echo $Name;
  $roll = "";
  echo $roll;


//   An array is a collection of similar data type. In array we can store multiple value with different type. syntax to declare an array in php.
//   $arr = array(1,2,3);
//   there are two type of array in php. they are 
//   single dimensional array: syntax to declare single dimensional array
// $arr = array(1,2,3);
    // let us see the simple example to print array element using for loop 

    // $arr = array(1,2,5);
    // for ($i=0; $i < count($arr); $i++){
    //     echo "$i at index is ".$arr[$i];
    // }

     

//   multi-dimensional array : in multidimensional array element is store on row and column base index.
    //  $arrs = array(
    //      array(2,3,4),array(20,30,40),
    //      array(22,33,40),array(20,23,4)
    //  );

    //  for($i=0; $i < count($arrs); $i++){
    //      for($j=0; $j < count($arrs[$i]); $j++){
    //          echo $arrs[$i][$j];
    //      }
    //  }


    // echo "associative array: in associative array the element has unique name.we can used (=>) operator in associative array.the php array element is sort in ascending order"; 
    //  $a = array("name"=>"krishna","roll"=>1,"id"=>1);
    //  echo "my name is ".$a["name"];
     
    //   echo "accessing array using foreach"; 
    //  foreach ($a as $key=>$value){
    //      echo "your $key is ".$value."<br>";
    //  }

    //  echo "the php index array is start from zero and goes to array length we can find array length using count function. here is simple example to print array length.";
    //  $name = ["krish","krishna","janaki"];
    //  var_dump($name);



    // echo "function: In php function is a predefined keyword, we can used function to reused our code.";

    // let us see the simple example where we can pass array to the method and print the array element. passing array to the function in php;
     
    // function showarray($city){
    //     for ($i=0; $i < count($city); $i++){
    //         echo "index $i, your city is: ".$city[$i];
    //     }
    // }

    // showarray(["Nepal","india"]);


    echo "<br><br>Get method : in php Get method is used to submit the form. get method is not secure. after submit for with get method the data will see in browser url bar. so get method is not secure. if you want to pass password then we will used post method.
    we can used['name'] to get data from browser url bar
    let see the example using get method";

    // if(isset($_GET["submit"])){
    //     echo "Your name is ".$_GET["fname"];
    // }else{
    //     echo "<h4>please enter your name</h4>";
    // }

?>
<ul>
    <li>php variable can start with dollar sign followed by a variable name.</li>
    <li>php variable can start with alphabate, charater and underscore.</li>
    <li>php variable is case-sensitive so $name and $Name is different variable.</li>
    <li>php variable name can not contain space</li>
</ul>

<!-- <form action="index.php" method="GET">
    <input type="text" name="fname">
    <button name="submit">submit</button>
</form> -->

<h3><?php echo $define; ?></h3>
