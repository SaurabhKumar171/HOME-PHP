<?php
session_start();


//unsets all variables that are in session
session_unset();  
 // if we have unsetted the session and then if we try 
 //to access session's data it will throw error .To again 
// access session's data we again have to create session.




session_destroy();

echo "<br>You have been logged out";
?>