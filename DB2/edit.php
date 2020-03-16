<?php
include "connection.php";
$edit_id = $_GET['edit_id'];

$sql = "SELECT * FROM `student` WHERE `sid` = '$edit_id'";
$rs  = $db->query($sql);
$row = $rs->fetch_array();

?>
<html>
	<body>
		<form method = "post" action = "update.php">
		<input type = "hidden" name = "up_id" value = "<?php print $row['sid']?>">
			<table>
				<tr>
					<td>Name</td>
					<td><input type = "text" name = "sname" value = "<?php print $row['sname']?>"></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><input type = "text" name = "sphone" value = "<?php print $row['sphone']?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type = "submit" Value = "Edit"></td>
				</tr>
			</table>
		</form>
	</body>
</html>