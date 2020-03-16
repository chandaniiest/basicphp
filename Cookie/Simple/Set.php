<?php
date_default_timezone_set("Asia/Kolkata");
//print date("D-d-m-y,h:i:s a");

setcookie("msg", "Hello World", time()+30 ); //timestamp - seconds

print "time = ".time();// 1st Jan 1970
$date = date("D-d-m-y,h:i:s a");// h is for 12 hours and H is for 24 hours
print "<hr>".$date;

print "<hr>Msg = ".$_COOKIE['msg'];
?>
<H1> I am page Set.php </H1>

<?php include "_links.php"; ?>

