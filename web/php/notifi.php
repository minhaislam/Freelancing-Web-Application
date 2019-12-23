<?php


	session_start();
	
	if(isset($_COOKIE['uname'])){
?>


<html>
	<head>
		<title>Notifications </title>
	</head>
	
	<body>
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
						<a href = "LogOut.php"><h3>LogOut</h3></a></td>
					</tr>
					
					 <tr>
                        <td colspan="8" style="border-top:4px solid #888;"></td>
                    </tr>
					
					<tr>
						<td> <br> </td>
					</tr>
					
					
					
					<tr>
						<td colspan="8"> <font size="+2"> <b> Your Notifications </b></font> <br> <hr> </td>
					</tr>
					
				


			
          	   <?php
          	  $conn=mysqli_connect('localhost','root','','chatbox');
			$sql="select username from logs ORDER By id DESC";
			$get=mysqli_query($conn,$sql);
			
   if(count($get)>0){
	while ($user=mysqli_fetch_assoc($get)) {
	
	?>
				<tbody>
					<tr>
						<td  colspan="8"><font color="red" size="5"><u><?php echo $user["username"];?></u></font> Has sent you a message   <a href="messages.php">View</a></td>
					</tr>


    <?php
    		}
    	}
	
	?>	
</tbody>
</table>


		</center>
	</body>
</html>
					
					
<?php		
	}else{
		header('location: signin.php');
	}

?>					
					
					