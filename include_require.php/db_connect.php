<?php

$servername="localhost";
$username="root";
$database="company";
$password="";

$cons=mysqli_connect($servername,$username,$password,$database);


if(!$cons){
    die("OOPS ! can't be connected".mysqli_connect_error());

}
else{
    echo "connected";
}
?>


