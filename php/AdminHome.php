<?php

session_start();
if(isset($_COOKIE['uname'])){

?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body align="center">
	
		
		<table  style="border-bottom:1px solid #888;">
			<thead>
				<tr>
					<td width="100px"><b><font size="6">FreelanceSite</font></b></td>
					<td align="center" width="500"><h1>Welcome Home!!! <?php echo $_SESSION['uname'];?> </h1></td>

<td><a href="viewinfo.php">View Info</a><br></td>
		<td><a href="logout.php">Logout</a><br></td>
		<td><a href="Jobreq.php">Job Requests</a><br></td>
		<td><a href="EditCatagory.php">Edit Catagory</a><br></td>
		<td><a href="FreelancerDetails.php">Freelancer Details</a><br></td>
		<td><a href="Analytics.php">Analytics</a><br></td>
		<td><a href="UserAnalysis.php">User Analysis</a><br></td>
		<td><a href="Message.php">Message</a><br></td>
		<td><a href="Notification.php">Notificstion</a><br>
			<td>
		<a href="profile.php">Profile</a><br>
	</td>

	<td style="border-top:1px solid #888;" colspan="8"></td>


				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					
		
		<td></td>
		</tr>
		</tbody>
</table>
</body>



</html>

<?php
}
else{
	header('location:../html/signin.html');
}
?>
