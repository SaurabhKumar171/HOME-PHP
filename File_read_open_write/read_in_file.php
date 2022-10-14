<?php
$file_name="docs/content.txt";
$file= fopen($file_name,'r');
$file_Size=filesize($file_name);
// echo $file_Size."Bytes";
$content =fread($file,$file_Size);
fclose($file);

echo $content;
?>