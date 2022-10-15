<?php

//it's an associative array which stores cookie value


//set a cookie
 setcookie("name","pankaj",time()+3600);
// setcookie("saurabh",21,time()+3600);

//get or access cookies
// print_r($_COOKIE);



//delete cookie(just takes expiry time to -)
setcookie("name","pankaj",time()-3600);




