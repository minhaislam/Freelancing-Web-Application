<?php
     session_start();
	if(isset($_REQUEST['buy'])){
?>



<html>
	<head>
			<title> Project </title>
	</head>
	<body>
	
	<center>
		<table border="0" >
			<tbody>	
					<tr height="100">
						<td width="400px">
							<h1>Transaction<h1>
						</td>
						
						<td width="300">
							<input type="text" name="search">
							<input type="button" name="sc" value="Search">
						</td>
						
						<td width="50">
							<a href="Profile.php">Profile</a>
						</td>
						
						
						
						<td width="70"> 
							<a href="Messages.php">Messages</a>
						</td>
						
						<td width="85"> 
							<a href="Notification.php">Notification</a>
						</td>
						
						<td width="40"> 
							<a href="Jobs.php">Jobs</a>
						</td>
						
						<td width="60"> 
							<a href="Logout.php">Log out</a>
						</td>
						
						
						<td>
						<br>
							<center>
							<a href="Profile.php"><img src="64572.png" width="40px" height="40px"></a><br>
							<p><b> <?= $_SESSION['uname']?></b></p>
							</center>
						</td>
						
					</tr>
					
					<tr>
						<td colspan="8" style="border-top:2px solid #888;"></td>	
					</tr>
					
					
						
						<tr>
							<td ><a href=""><img src="1.jpg" width="300px" height="300px"> </td>
						</tr>
						
						
						<tr>
					
					<td><p><b>How do you want to pay?</b></p> <br> </td>
				
					<tr>
						<td><input type="radio" name="pay"/> Cash 
						<input type="radio" name="pay"/> Card </td>
					</tr>
					
					</tr>
					<tr></tr>
						
						<tr>
							<td><input type="button" onclick="window.location.href = 'buyerhome.php';" name="cancel" value="Cancel">            <input type="submit" name="buy" value="Buy"/><td>
							
						</tr>
						
						
			</tbody>
		</table>
	</center>
	</body>
	
</html>



<?php		
	}else{
		header('location: Buy.php');
	}

?>