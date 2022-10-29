<?php
$servername="localhost";
$username="root";
$password="";
$database="company";

$cons=mysqli_connect($servername,$username,$password,$database); 


// $sql="Create database saurabh";
// mysqli_query($cons,$sql);


if(!$cons){
 die("OOPS ! can't be connected".mysqli_connect_error());
}
else{
  echo "connected<br>";
}


$sql="DELETE FROM empolyee WHERE `empolyee`.`Name` ='sita'";
$result=mysqli_query($cons,$sql);


$aff= mysqli_affected_rows($cons);
echo "<br>no. of affected rows are : $aff";
echo "<br>";

if($result){
    echo "Deleted Successfully!<br>";
}
else{
    echo "Not deleted Successfully because ---> ". mysqli_error($cons);
}

?>