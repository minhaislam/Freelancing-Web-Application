<?php
	if(isset($_COOKIE['uname'])){

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
							<h1>Messages <h1>
						</td>
						
						<td width="300">
							<input type="text" name="search">
							<input type="button" name="sc" value="Search">
						</td>
						
						<td width="50">
							<a href="buyerhome.php">Home</a>
						</td>
						
					
						
						<td width="70"> 
							<a href="Profile.php">Profile</a>
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
							<a href=""><img src="64572.png" width="40px" height="40px"></a><br>
							<p><b> <?= $_COOKIE['uname']?></b></p>
							</center>
						</td>
						
						
						
					</tr>
						
					<tr>
						<td colspan="8" style="border-top:2px solid #888;"></td>	
					</tr>	
						
						
					</table>
	          </tbody>
			
			
			
			
			<table border="0" >
			<tbody>			
				<tr>
					
					<td width="300">
						<h3><u>Active Users</u><h3> <br>
						<h3>no user online</h3>
					</td>
					<td > 
						<input style="height: 300px;" type="text" name="text">
						</td>
						
					  </tr>
					  
					 
					
					<tr>
					
					<td>
						</td>
						
						
						
					
					 <td colspan="4"><input type="submit" name="submit" value="Send"></td>
					</tr>
					
					
					</table>
	          </tbody>
			</table>
			
		</form>
	</center>
</body>
</html>


<?php		
	}else{
		header('location:signin.php');
	}
?>