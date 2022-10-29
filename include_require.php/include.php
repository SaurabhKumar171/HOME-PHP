<?php
 include("db_connect.php");

//  include("db_connect1.php");
//  echo "<br><br>saurabh";
// it'll execute the code present after the error if the included file in not present

$sql="SELECT * FROM `empolyee`";
$result=mysqli_query($cons,$sql);



//find no. of record returned
$num=mysqli_num_rows($result);
echo $num;
echo "<br>";

while($row =mysqli_fetch_assoc($result)){
   
  
  
    echo "Hello ".$row['Name']." ur mail is ".$row['Email ID'];
    echo "<br>";
    echo "<br>";
  
  }


?>