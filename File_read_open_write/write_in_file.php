<?php
echo "Welcome to write file in php";
$fptr = fopen("content2.txt",'w');  //fopen -> to open file
  // 'w' -> writable mode,bcoz of w mode 1st it'll try to open the file in docs folder if it don,t exists it'll create one

  //It will write the given content in content2.txt
 fwrite($fptr,"I am writing this content in the file\n");
 fwrite($fptr,"I am writing this content in the file\n");
 fwrite($fptr,"I am writing this content in the file\n");
 fwrite($fptr,"This is more content");
 //In write mode if we try to open a file then if it do not exists then it gets created and if it already exists the content inside that file gets overwritten.


 fclose($fptr);
 
?>
