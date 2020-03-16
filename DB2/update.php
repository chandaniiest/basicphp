<?php
include "connection.php";

$up_id	= $_POST['up_id'];
$name	= $_POST['sname'];
$phone	= $_POST['sphone'];

$sql = "UPDATE `student` SET `sname` = '$name',`sphone` = '$phone' WHERE `sid` = '$up_id'";
$db->query($sql);

header('location:index.php');
?>