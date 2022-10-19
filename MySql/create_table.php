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


//create a table
?>