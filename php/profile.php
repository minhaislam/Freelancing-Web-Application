<?php
require_once('../db/database.php');
session_start();

if (isset($_POST['cngpass'])) {
	
	$opass=$_POST['opass'];
	$npass=$_POST['npass'];
	$cpass=$_POST['cpass'];
	$uname=$_SESSION['uname'];
	if ($npass==$cpass) {	
	$con=dbconnect();
			$sql="update info SET pass='{$npass}',cpass='{$cpass}' where pass='{$opass}' and uname='{$uname}'";
			$set=mysqli_query($con,$sql);
			header('location: Logout.php');
				mysqli_close($conn);
}
else{
	echo "Password doesn't match";
}
}
if(isset($_COOKIE['uname'])){
$user=Profile($_SESSION['uname']);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body >
	
		<table border="1">
		<tr>
		<td colspan="2">
			Profile
		</td>
		</tr>
		<tr>
		<td>
		ID
		</td>
		<td>
		<?php echo $user["id"];?>
		
		</td>
		</tr>
				<tr>
		<td>
		NAME
		</td>
		<td>
		<?php echo $user["uname"];?>
		
		</td>
		</tr>
				<tr>
		<td>
		USER TYPE
		</td>
		<td>
		<?php echo $user["utype"];?>
		</td>
		</tr>
		<tr>
		<td>
		</td>
		<td>
		<a href="AdminHome.php">Go Home</a><br>
			</td>
		</table>

		<form method="POST" action="">
			<fieldset>
			<legend><b>Change Password</b></legend>
			<table>
				Old Password:<input type="Password" name="opass"> <br><br>
				New Password:<input type="Password" name="npass"><br><br>
				Cofirm New Password:<input type="Password" name="cpass"><br><br>
				<input type="submit" name="cngpass" value="Submit">
</fieldset>

			</table>

		</form>

</body>
</html>
<?php
}
else{
	header('location:../html/signin.html');
}
?>