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

$sql="SELECT * FROM `empolyee`";
$result=mysqli_query($cons,$sql);



//find no. of record returned
$num=mysqli_num_rows($result);
echo $num;
echo "<br>";
//display the rows returned by the sql query
// if($num>0){
//    $row= mysqli_fetch_assoc($result);
//    echo var_dump($row);
//    echo "<br>";
//    $row= mysqli_fetch_assoc($result);
//    echo var_dump($row);
//    echo "<br>";
//    $row= mysqli_fetch_assoc($result);
//    echo var_dump($row);
//    echo "<br>";
//    $row= mysqli_fetch_assoc($result);
//    echo var_dump($row);
//    echo "<br>";
//    $row= mysqli_fetch_assoc($result);
//    echo var_dump($row);
//    echo "<br>";
//    $row= mysqli_fetch_assoc($result);
//    echo var_dump($row);
//    echo "<br>";
// }



//To fetch in a better way we use while loop
while($row =mysqli_fetch_assoc($result)){
  echo var_dump($row);
  echo "<br>";
  echo "<br>";


  echo "Hello ".$row['Name']." ur mail is ".$row['Email ID'];
  echo "<br>";
  echo "<br>";

}
?>






