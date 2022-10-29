<?php
// sessions --> used to manage information across different pages

session_start();

$_SESSION['username']="Saurabh";
$_SESSION['favCat']="Books";
echo "We have saved your session";



?>