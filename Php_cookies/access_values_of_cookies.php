<?php  
include ("create_cookie.php");  //to get cookies


echo "<br>";
echo "<br>";

 if(isset($_COOKIE["name"])){
    echo "Hello, ". $_COOKIE['name'];
}
else{
    echo "no0";
}
?>
?>