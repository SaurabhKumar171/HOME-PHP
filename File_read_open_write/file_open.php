<?php


$file_pointer =fopen("content.txt","r");   //return resource(if file could be opened) else false.
// echo var_dump($file_pointer);


if(!$file_pointer){
    die("Unable to open this file. Please enter a valid file name");
}


//to extract file content if file is opened

// $con = fread($file_pointer,5);

$con = fread($file_pointer,filesize("content.txt"));

echo $con;
echo "<br>";
//close  file
fclose($file_pointer);
echo $con;
?>