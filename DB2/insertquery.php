<?php
include "connection.php";
$name	= $_POST['sname'];
$phone	= $_POST['sphone'];

$sql = "INSERT INTO `student` (`sid`,`sname`,`sphone`) VALUES (NULL,'$name','$phone')";
$db->query($sql);

header('location:index.php?msg=INSERT'); //? Query String

?>