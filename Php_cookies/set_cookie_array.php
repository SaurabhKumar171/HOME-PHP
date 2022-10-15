<?php

//set cookie array
setcookie("cookie[one]", "Cookie One");
setcookie("cookie[two]", "Cookie two");
setcookie("cookie[three]", "Cookie three");


if(isset($_COOKIE['cookie'])){
    echo "<pre>";
    print_r($_COOKIE["cookie"]);
}
?>