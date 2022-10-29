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

$sql="SELECT * FROM `empolyee` WHERE `Nationality`='india'";
$result=mysqli_query($cons,$sql);



$num=mysqli_num_rows($result);
echo $num;
echo "<br>";
 "<br>";


//To fetch in a better way we use while loop
while($row =mysqli_fetch_assoc($result)){
  echo var_dump($row);
  echo "<br>";
  echo "<br>";


  echo "Hello ".$row['Name']." ur mail is ".$row['Email ID'];
  echo "<br>";
  echo "<br>";

}

$sql="UPDATE `empolyee` SET `Name` = 'God' WHERE `empolyee`.`Phone no.` = 764;";
$result=mysqli_query($cons,$sql);

//to reutrn no. of affected rows
$aff= mysqli_affected_rows($cons);
echo "<br>no. of affected rows are : $aff";

echo "<br>";
//$result has value only 2 values(1-- for true),(0--false)

if($result){
    echo "Your record is updated successfully!<br>";
}
else{
    echo "Your record is not updated successfully!<br>";
}


?>