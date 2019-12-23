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




		<center>
			<table border="0">
				<tbody>
					<tr>
						<td width="200px"><h2><i><font color="Red">Freelance</font></i></h2></td>
						<td width="90px"><a href = "profile.php">Profile</a></td>
						<td width="90px"><a href = "messages.php">Messages</a></td>
						<td width="90px"><a href = "earning.php">Earnings</a></td>
						<td width="100px"><a href ="notifi.php">Notifications</a></td>
						<td width="150px"><a href ="buyer.php">Buyer Request</a></td>
						<td width="90px"><a href = "balance.php">Show Balance</a><br>
						<td><a href="SellerHome.php"><img src="a.jpg" width="40px" height="40px"></a>
						<br>
						<a href = "Logout.php"><h3>LogOut</h3></a></td>
					</tr>
					
					 <tr>
                        <td colspan="8" style="border-top:4px solid #888;"></td>
                    </tr>
					
					<tr>
						<td> <br> </td>
					</tr>
					
					
				
		<tr>
		<td >
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
		Password
		</td>
		<td>
		<?php echo $user["pass"];?>
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
		<tr>
						<td> <br> </td>
					</tr>
		</table>

		<form method="POST" action="">
			
			<legend><b>Change Password</b></legend>
			<table border="1">
				<tr>
					<td>Old Password:<input type="Password" name="opass"></td> <br><br></tr>
					<tr><td>New Password:<input type="Password" name="npass"></td><br><br></tr>
					<tr><td>Cofirm New Password:<input type="Password" name="cpass"></td><br><br></tr>
					<tr><td><input type="submit" name="cngpass" value="Submit"></td></tr>
			


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