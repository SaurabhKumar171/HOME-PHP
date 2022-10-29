<?php
$servername="localhost";
$username="root";
$password="";
$database="saurabh";


//create a connection
$cons=mysqli_connect($servername,$username,$password,$database); 

if(!$cons){
 die("OOPS ! can't be connected".mysqli_connect_error());
}
else{
  echo "connected";
}


//create a table in db
$sql= "CREATE TABLE `trip` (`sno` INT(6) not null AUTO_INCREMENT PRIMARY KEY, `name` VARCHAR(20) NOT NULL,`dest` VARCHAR(10) NOT NULL)";
$result=mysqli_query($cons,$sql);

if($result){
  echo "Table created successfully!<br>";
 }
 else{
   echo "Table not Created because of ------> ".mysqli_error($cons);
 }
?>