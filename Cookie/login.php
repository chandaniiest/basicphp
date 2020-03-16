<?php
    session_start();
    include "links.php";
	include "connection.php";
	

	if($_POST['log'])
		{
		$useremail     = $_POST['email'];
		$userpassword = $_POST['pass'];
        
		$sql = "SELECT * FROM `student` WHERE `email` = '$useremail' AND `password` = '$userpassword'";
		$res = $db->query($sql);
		$num = $res->num_rows;

		if($num>0) {
			$row = $res->fetch_array();
			$_SESSION['userid']		= $row['id'];
			$_SESSION['username']	= $row['name'];

			if($_POST['check']) {
				$time = time()+3600;
				setcookie("useremail",$useremail,$time);
			}

			header('location:profile.php');
		}
		else {
			print "Invalid Details";
		}

	}
?>

<center>
  <h2>Login Here</h2>
   <form method="post" action="">
	<table width="350" height="175" cellpadding="10" border="1">
   <tr>
	<th>Email</th>
	<td><input type="text" name="email" value = "<?php print $_COOKIE['useremail']?>"></td>
   </tr>
   <tr>
	<th>Password</th>
	<td><input type="password" name="pass"></td>
   </tr>
   <tr>
	
	<td colspan = "2" align = "right">Remember Me<input type="checkbox" name="check"></td>
   </tr>
   <tr>
	<td colspan="2" align="center"><input type="submit" name="log" value="Login"></td>
   </tr>
   </table>
   </form>
   <a href = "index.php">Back</a>
</center>