<?php
setcookie("msg", "Bye World", time()+60 );
print "time = ".time();
?>

<H1> I am page Change.php </H1>

<?php print "The msg = ". $_COOKIE['msg'];?>


<?php include "_links.php"; ?>