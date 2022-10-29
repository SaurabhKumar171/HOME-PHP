<?php
// Cookie is a small piece of info. or file that php script stores on users comp.


//  setcookie("name_of_cokkie","cookie's_value",86400,"/");
            //name_of_cookie--> example "category"
            // value_of_cookie--> "Books"
            //time_in_which_cookie_will_expire--> time()
            //Domain(where want to use cookie)--> (/) means we want to use cookie all over the website

//set or create a cookie
// 86400 sec in one day means the cookie will expire in 1 day
 setcookie("category","Books",time()+86400,"/");



 //get or access cookies
 echo "<pre>";
 print_r($_COOKIE);


 //to see cookie [inspect-->network-->filename-->headers]

?>