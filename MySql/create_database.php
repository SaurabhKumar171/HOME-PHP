<?php
$servername="localhost";
$username="root";
$password="";
$database="saurabh";

$cons=mysqli_connect($servername,$username,$password,$database); 


// $sql="Create database saurabh";
// mysqli_query($cons,$sql);


if(!$cons){
 die("OOPS ! can't be connected".mysqli_connect_error());
}
else{
  echo "connected";
}

//
?>