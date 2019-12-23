<?php
	session_start();

if(isset($_COOKIE['uname'])){
?>



<html>
	<head>
		<title>HomePage </title>
	</head>

	<script type="text/javascript">
		function updatepicture(pic){
			document.getElementById("image").setAttribute("src",pic);
		}
	</script>
	
	<body>
		<form id="form" method="post" action="upload.php" enctype="multipart/form-data" target="iframe">
		<center>
			<table border="0">
				<tbody>
					<tr>
						<td width="200px"><h2><i><font color="Red">Freelance</font></i></h2></td>
						<td width="50px"><a href = "profile.php">Profile</a></td>
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
					
					<tr rowspan="1" >
						<td colspan="1"> <img src="a.jpg" width="200px" height="200px"> <br>
						<center><h3><?=$_SESSION['uname']?></h3>
						<p> Bangladesh </p></center>
						</td>
						<td colspan="7" align="center"> <h1><u> Upload Work </u></h1> <br>
						<input type="file" id="file" name="file" /> 
						<input type="submit" name="submit" id="submit" value="Upload File"/>
						<br><br>
						<p id="message">Upload Message will go Here.</p>
						<img style="min-height: 120; min-width: 200; max-height: 120px;" id="image" /><br>
						<br>

						<iframe style="display: none;" name="iframe" ></iframe>
						
						</td>
					</tr>
					
					<tr>
						<td colspan="1" style="border-top:2px solid #888;"></td>
						<td colspan="6">  <br> </td>
					</tr>
					<tr>
						<td><b>Linked Accounts</b> <br> <a href="www.facebook.com">Facebook </a></td>
					</tr>
					</tr>
					
					<tr>
						<td colspan="1" style="border-top:2px solid #888;"></td>
						<td colspan="6">  <br> </td>
					</tr>

					<tr rowspan="1">
						<td colspan="1"> </td>
						<td><b><font size="+2">Reviews</font></b><br><p>Show reviews</p></td>
					</tr>
					
					</tbody>
				</table>
			</center>
		</form>
		</body>


</html>

<?php		
	}else{
		header('location: signin.html');
	}

?>
