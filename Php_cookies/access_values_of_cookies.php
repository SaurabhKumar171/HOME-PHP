<?php  
include ("create_cookie.php");  //to get cookies


echo "<br>";
echo "<br>";

 if(isset($_COOKIE["category"])){
    echo "Hello, ". $_COOKIE['category'];
}
else{
    echo "no";
}

?>
