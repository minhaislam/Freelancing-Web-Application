<?php

	session_start();
	
	if(isset($_COOKIE['uname'])){
?>

<html>
	<head>
		<title>Balance </title>
	</head>
	
	<body>
		<center>
			<table border="0">
				<tbody>
					<tr>
						<td width="200px"><h2><i><font color="Red">Freelance</font></i></h2></td>
						<td width="90px"><a href = "profile.php">Profile</a></td>
						<td width="90px"><a href = "message.php">Messages</a></td>
						<td width="90px"><a href = "earning.php">Earnings</a></td>
						<td width="100px"><a href ="notifi.php">Notifications</a></td>
						<td width="150px"><a href ="buyer.php">Buyer Request</a></td>
						<td width="90px"><a href = "balance.php">Show Balance</a><br>
						<td><a href="SellerHome.php"><img src="a.jpg" width="40px" height="40px"></a>
						<br>
						<a href = "LogOut.php"><h3>LogOut</h3></a></td>
					</tr>
					
					 <tr>
                        <td colspan="8" style="border-top:4px solid #888;"></td>
                    </tr>
					
					<tr>
						<td> <br> </td>
					</tr>
					
					<tr>
						<td colspan="8"> <font size="+2"> <b>Your current balance is </b></font><br><hr></td>
					</tr>
					
					<tr>
						<td> <font size="+1"> Current balance: $0.00 </font></td>
					</tr>
					
				</tbody>
			</table>
		</body>
	</html>
	
<?php		
	}else{
		header('location: signin.php');
	}

?>							
					