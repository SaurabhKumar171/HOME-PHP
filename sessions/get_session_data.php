<?php


session_start();

if(isset($_SESSION['username'])){ 
echo "Welcome". $_SESSION['username'];
echo "<br> Your favourite Category is ".$_SESSION["favCat"];
}
else{
    echo "Please login to continue";
}
?>