<?php


	session_start();
	
	if(isset($_COOKIE['uname'])){
?>


<html>
	<head>
		<title>Buyer Request </title>
		<script type="text/javascript"  src="../javascript/search.js"></script>
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
						<td align="right" colspan="8" width="100">
						
					<input type="text" name="search" class="input" id="search" onkeyup="searchu(this.value)" placeholder="Search User"><br>
					<div id="result"></div>
				</td>
					<td>
					<input type="submit" name="go" id="go" value="Go" onclick="show(document.getElementById('search').value)">
				</td>
					</tr>
					
					<tr>
						<td colspan="8"> <font size="+2"> <b> Buyer Request </b></font> <br> <hr> </td>
					</tr>
					
					
					
					<tr>
						<td colspan="8"> <hr> </td>
					</tr>
					
					<tbody align="right" >
          	   <?php
          	  $conn=mysqli_connect('localhost','root','','fwa');
			$sql="select username,msg from logs";
			$get=mysqli_query($conn,$sql);
			
   if(count($get)>0){
	while ($user=mysqli_fetch_assoc($get)) {
	
	?>
					<tr>
						<td><text style="color:red"><?php echo $user["username"];?>:</text></td>
						<td><?php echo $user["msg"];?></td>
					</tr>


    <?php
    		}
    	}
	
	?>	
					
				</tbody>
			</table>
		</body>
	</html>
						
<?php		
	}else{
		header('location: signin.php');
	}

?>					
					