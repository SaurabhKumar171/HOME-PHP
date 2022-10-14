<?php
$file_name="docs/content.txt";
$file = fopen($file_name,'w');  //fopen -> to open file
  // 'w' -> writable mode,bcoz of w mode 1st it'll try to open the file in docs folder if it don,t exists it'll create one

  if($file==false){
   echo "File can't be opened!";
  }

  $file_content="ldhdjs hdkd fjfjf fkffkf this is a content file";

  fwrite($file,$file_content);
  fclose($file);
?>
