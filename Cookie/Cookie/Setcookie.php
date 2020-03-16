<?php
   $time = time()+60*60;

   setcookie("username","Tom",$time);
   setcookie("userpassword","1234",$time);
   echo "Cookie set";

   
?>
<br>
<a href="showcookie.php">Show</a>