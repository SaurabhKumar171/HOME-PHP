<?php

//fgets reads only first line of content to rad 2nd line we write fgets twice
// In 1st pass fptr is equal to 1 and it reads 1st line, then fptr increases to 2 in 2nd pass and it reads 2nd line

$fptr= fopen("content.txt","r");

//(1.)Reading a file
echo fgets($fptr);  //[1st line]
echo fgets($fptr);  //[2nd line]
echo"<br>";
echo var_dump(fgets($fptr));  //[3rd line]
echo"<br>";
echo var_dump(fgets($fptr));  //[hth line [bool(false) bcoz there is no 4th line]   ]


// fgetc()--> for chracter by character reading
// fgets()--> for Line by Line reading


//(2.) Reading a file usng while loop
while($a =fgets($fptr)){
    
    echo $a;
    echo "<br>";
}
echo "End of file has reached";


//(3.) write a program to read file content until . appeared
while($a=fgetc($fptr)){
    echo $a;

    if($a == "a"){
        break;
    }
}


fclose($fptr);
?>