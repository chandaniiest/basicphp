<?php
//Show Data
include "connection.php";
if($_GET['msg']=="INSERT") {
	print "<script>alert('Thank You! Your Form has been Submitted')</script>";

}
print "<table border = 1 align = center>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Phone</th>
				<th>Delete</th>
				<th>Edit</th>
				
			</tr>";

$sql = "SELECT * FROM `student`";
$res = $db->query($sql);
while($row = $res->fetch_array()) {
	print "<tr>
			<td>$row[sid]</td>
			<td>$row[sname]</td>
			<td>$row[sphone]</td>
			<td><a href = \"delete.php?del_id=$row[sid]\" onclick=\"javascript:return confirm('Are You Sure?')\">Delete</a></td>
			<td><a href = \"edit.php?edit_id=$row[sid]\" >Edit</a></td>
		</tr>";
}

?>
</table>
<a href = "insertform.php">Insert Data</a>