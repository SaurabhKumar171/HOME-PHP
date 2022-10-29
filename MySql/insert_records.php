<?php
$servername="localhost";
$username="root";
$password="";
$database="saurabh";

$cons=mysqli_connect($servername,$username,$password,$database); 

if(!$cons){
 die("OOPS ! can't be connected".mysqli_connect_error());
}
else{
  echo "connected";
}

//sql querry to be executed


// $sql="INSERT INTO `trip`(`sno`, `name`, `dest`) VALUES ('2','sohan','punjab');";
// $result=mysqli_query($cons,$sql);
 
// or

$name="surabh";
$dest="delhi";
$sql="INSERT INTO `trip`( `name`, `dest`) VALUES ('$name','$dest');";
$result=mysqli_query($cons,$sql);

if($result){
    echo "The record has added successfully!<br>";
}
else{
    "The record has not added successfully! because of ------> ".mysqli_error($cons);
}
?>