<?php
$servername="localhost";
$username="root";
$password="";

$cons=mysqli_connect($servername,$username,$password); 


$sql="Create database saurabh";
mysqli_query($cons,$sql);


if(!$cons){
 die("OOPS ! can't be connected".mysqli_connect_error());
}
else{
  echo "connected";
}
?>