<?php

//set or create a cookie
 setcookie("name","pankaj",time()+3600);
 setcookie("saurabh",21,time()+3600);


 //get or access cookies
 echo "<pre>";
 print_r($_COOKIE);

