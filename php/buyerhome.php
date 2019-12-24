<?php
	session_start();
if(isset($_COOKIE['uname'])){

?>



<html>
	<head>
			<title> Project </title>
	</head>
	<body>
	<table>

	<center>
	<tr>
						<td width="150px"><h2><i><font color="Red">Freelance</font></i></h2></td>
	</tr>					

</table>
	
	<center>
		<table border="0" >
			<tbody>	
					<tr height="100">
						<td width="400px">
							<h1>Home<h1>
						</td>
						
						<td width="300">
							<input type="text" name="search">
							<input type="button" name="sc" value="Search">
						</td>
						
						<td width="50">
							<a href="buyerprofile.php">Profile</a>
						</td>
						
						
						
						<td width="70"> 
							<a href="buyermessages.php">Messages</a>
						</td>
						
						<td width="85"> 
							<a href="buyernotification.php">Notification</a>
						</td>
						
						<td width="40"> 
							<a href="buyerjobs.php">Jobs</a>
						</td>
						
						<td width="60"> 
							<a href="LogOut.php">Log out</a>
						</td>
						
						
						<td>
						<br>
							<center>
							<a href="Profile.php"><img src="64572.png" width="40px" height="40px"></a><br>
							<p><b> <?= $_COOKIE['uname']?></b></p>
							</center>
						</td>
						
					</tr>
					
					<tr>
						<td colspan="8" style="border-top:2px solid #888;"></td>	
					</tr>
					
					<tr>
					<td><p><b>Browse Works</b></p> <br> </tr></td>
						
						<tr>
							<td > <a href="Buy.php"><img src="1.jpg" width="50px" height="50px">   Name: Habib, Work: Graphics</td>
						</tr>
						
						<tr>
							<td ><a href="Buy.php"><img src="1.jpg" width="50px" height="50px">   Name: Ratul, Work: Logo</td>
							
						</tr>
						
						<tr>					
							<td ><a href="Buy.php"><img src="1.jpg" width="50px" height="50px">   Name: Minhaj, Work: Website</td>					
						</tr>
						
						<tr>					
							<td ><a href="Buy.php"><img src="1.jpg" width="50px" height="50px">   Name: Asif, Work: C++</td>						
						</tr>
						
						<tr>
							<td ><a href="Buy.php"><img src="1.jpg" width="50px" height="50px">   Name: Emon, Work: Java</td>
						</tr>
						
						<tr>
							<td ><a href="Buy.php"><img src="1.jpg" width="50px" height="50px">   Name: Ovi, Work: Art</td>
						</tr>
			</tbody>
		</table>
	</center>
	</body>
	
</html>



<?php		
	}
else{
	header('location:../html/signin.html');
}

?>