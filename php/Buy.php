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
							<h1>Home<h1>
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
					
					<td><p><b>Browse Works</b></p> <br> </td>
					
					</tr>
						
						<tr>
							<td > <a href="Buy.php"><img src="1.jpg" width="50px" height="50px">   Name: Habib, Work: Graphics</td>
							<td></td>
					<td colspan="3" rowspan="4"><a href=""><img src="1.jpg" width="200px" height="200px"> </td>
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
							<td></td>
							<td>Do you want to buy this product?</td>
						</tr>
						
						
						
						<tr>
							<td ><a href=""><img src="1.jpg" width="50px" height="50px">   Name: Ovi, Work: Art</td>
							<td></td>
							<form method="POST" action="buyertransaction.php">
							<td><input type="button" onclick="window.location.href = 'Home.php';" name="cancel" value="Cancel"><td> 
							<td><input type="submit" name="buy" value="Buy"/><td>
							</form>
						</tr>
			</tbody>
		</table>
	</center>
	</body>
	
</html>



<?php		
	}else{
		header('location:signin.php');
	}

?>