<?php
//Add content to the end of the file

$fptr= fopen("content.txt","a");
fwrite($fptr," ");
fwrite($fptr,"This is appended at end of file");


fclose($fptr);

?>