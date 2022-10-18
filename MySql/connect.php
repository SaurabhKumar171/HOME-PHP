<?php
$servername="localhost";
$username="root";
$password="";

$cons=mysqli_connect($servername,$username,$password); 

if(!$cons){
 die("OOPS ! can't be connected".mysqli_connect_error());
}
else{
  echo "connected";
}
?>