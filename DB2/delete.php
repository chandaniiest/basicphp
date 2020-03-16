<?php
include "connection.php";
$del_id = $_GET['del_id'];
//print $del_id;

$sql = "DELETE FROM `student` WHERE `sid` = '$del_id'";
$db->query($sql);

header('location:index.php');

?>