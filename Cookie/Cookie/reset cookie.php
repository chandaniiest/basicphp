<?php
   $time = time()+3600*3600;
   setcookie("username","BOB",$time);
   setcookie("userpassword","3456",$time);
   echo "Cookie Reset";
?>
<br>
<a href="showcookie.php">Show</a>