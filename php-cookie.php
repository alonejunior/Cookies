<?php
    
    //setcookie('cookienin adı' ,'cookienin değeri','zamanı)
    //$_COOKIE

   // setcookie('site' , 'udemy' , time() + (86400 * 365));

   setcookie('site' , 'test' , time() - (86400 * 365));


    print_r($_COOKIE);
?>