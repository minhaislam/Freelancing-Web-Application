<?php
require_once('../db/database.php');

session_start();

		
		if(isset($_POST['Add'])){
		
		$uname = $_POST['uname'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$cpass = $_POST['cpass'];
		$utype =$_POST["utype"];

		
		if(empty($uname)==true || empty($email)==true || empty($pass) == true ||empty($cpass) == true ||empty($utype) == true){
			echo "fill all!";
		} elseif ($pass!=$cpass) {
			echo "password doesn't match";	
		}
		 else{
			if (checkUniqueValue($uname)) {
				echo "Sorry. This uname is already taken.";
				exit();
			}

			if (checkUniqueValue($email)) {
				echo "Sorry. This email has been used already.";
				exit();
			}

           else{
            $conn=mysqli_connect('localhost','root','','fwa');
			$sql="insert into info(email,pass,cpass,uname,utype) values('{$email}','{$pass}','{$cpass}','{$uname}','{$utype}')";
			$set=mysqli_query($conn,$sql);
		header('location: viewinfo.php');
		mysqli_close($conn);
				}
		}
}
elseif (isset($_POST['Update'])) {
			//header('location: AdminHome.php');
	$uname = $_POST['uname'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$cpass = $_POST['cpass'];
		//$utype =$_POST["utype"];
		$id =$_POST["id"];

		
		if(empty($id)==true){
			echo "ID required!";
		} elseif ($pass!=$cpass) {
			echo "password doesn't match";	
		}
		 if (empty($email)==false) 
		 	{
			if (checkUniqueValue($email)) {
				echo "Sorry. This email is already taken.";
				exit();
			}


           else{
            $conn=mysqli_connect('localhost','root','','fwa');
			$sql="update info SET email='{$email}' where id='{$id}'";
			$set=mysqli_query($conn,$sql);
		header('location: viewinfo.php');
		mysqli_close($conn);
				}
		}

		 if (empty($uname)==false) 
		 	{
			if (checkUniqueValue($uname)) {
				echo "Sorry. This uname is already taken.";
				exit();
			}

			//if (checkUniqueValue($email)) {
			//	echo "Sorry. This email has been used already.";
			//	exit();
			//}

           else{
            $conn=mysqli_connect('localhost','root','','fwa');
			$sql="update info SET uname='{$uname}' where id='{$id}'";
			$set=mysqli_query($conn,$sql);
		header('location: viewinfo.php');
		mysqli_close($conn);
				}
		}

		 if (empty($pass)==false && empty($cpass)==false) 
		 	{
          if($pass==$cpass){
            $conn=mysqli_connect('localhost','root','','fwa');
			$sql="update info SET pass='{$pass}',cpass='{$cpass}' where id='{$id}'";
			$set=mysqli_query($conn,$sql);
		header('location: viewinfo.php');
		mysqli_close($conn);
				}
		}

	}
	elseif (isset($_POST['Delete'])) {
		$id =$_POST["id"];

		
		if(empty($id)==true){
			echo "ID required!";
		}
		else{
			$con=mysqli_connect('localhost','root','','fwa');
			$sql="DELETE from info where id='{$id}'";
			$set=mysqli_query($con,$sql);
			header('location: viewinfo.php');
		mysqli_close($conn);
			
		}
		}
		if(isset($_POST['id'])) { 
				$id = $_POST['id'];
				$_SESSION['id']=$id;
$con=mysqli_connect('localhost','root','','fwa');
			$sql="DELETE from info where id='$id'";
			$set=mysqli_query($con,$sql);
			header('location: viewinfo.php');
		mysqli_close($conn);
}


		
elseif (isset($_POST['Back'])) {
			header('location: AdminHome.php');
		}
		
	


		function checkUniqueValue($value){
				 $conn=mysqli_connect('localhost','root','','fwa');						

			$found = 0;
						$sql="select * from info where uname='{$value}' or email='{$value}'";
			$get=mysqli_query($conn,$sql);
			$user=mysqli_fetch_assoc($get);
						if($user["uname"] == $value){
							$found = 1;

						}
						if($user["email"] == $value){
							$found = 1;
						}
					
			return $found;
		}
		

		
		
if(isset($_COOKIE['uname'])){

?>



<!DOCTYPE html>
<html>

<head>
	<title>
		Info table
	</title>
	<script type="text/javascript"  src="../javascript/search.js"></script>
	<script type="text/javascript"  src="../javascript/show.js"></script>
	<link rel="stylesheet" type="text/css" href="../Css/viewinfo.css" />
	
</head>
<body>
		<div class="pos"><a class="testclass;" href="Jobreq.php">Job req</a></div>
		<div class="pos"><a  class="testclass;" href="FreelancerDetails.php">Freelancer Details</a></div>
		<div><a href="Analytics.php"><img src="../img/analytic.png" width="30px" height="30px" title="Analytics"></a></div>
		<div><a href="UserAnalysis.php"><img src="../img/unal.png" width="30px" height="30px" title="User Analysis"></a></div>
		<div><a href="Message.php"><img src="../img/msg.png" width="30px" height="20px" title="Message"></a></div>
		<div><a href="EditCatagory.php"><img src="../img/editcat.png" width="30px" height="30px" title="Edit Catagory" ></a></div>
		<div><a href="Notification.php"><img src="../img/bell.png" width="30px" height="30px" title="Notification"></a></div>
		<div><a href="adminhome.php"><img src="../img/home.png" width="30px" height="30px" title="Profile" ></a></div>
		<div><a href="profile.php"><img src="../img/profile.png" width="30px" height="30px" title="Profile" ></a></div>
		<div><a href="logout.php"><img src="../img/logout.png" width="25px" height="25px" title="Logout"></a></div>
		

	<table>
	<center>
	<tr>
				
					</tr>
					
					 <tr>
                        <td colspan="11" style="border-top:4px solid #888;"></td>
                    </tr>
					
		
	
	</table></center>

<center>
	<table border="1">
		<thead>
		<tr>
			<th>ID</th>
			<th>Email</th>
			<th>Password</th>
			<th>User Name</th>				
			<th>User Type</th>
		</tr>	
          </thead>

          <tbody>
          	   <?php
          	  $conn=mysqli_connect('localhost','root','','fwa');
			$sql="select * from info";
			$get=mysqli_query($conn,$sql);
			
   if(count($get)>0){
	while ($user=mysqli_fetch_assoc($get)) {
	
	?>
					<tr>
						<td><?php echo $user["id"];?></td>
		          		<td><?php echo $user["email"];?></td>
		          		<td><?php echo $user["pass"];?></td>
		          		<td><?php echo $user["uname"];?></td>
		          		<td><?php echo $user["utype"];?></td>
		          		 <td> <a href="ViewInfo.php?id=<?php echo $user['id'];?>">Delete</a>|<a href="edit.php?id=<?php echo $user['id'];?>"/>Edit</a></td>

		          	</tr>
		         	

    <?php
    		}
    	}
	
	?>	

          </tbody>	
        


	</table>
	</center>

	<form method="POST" action="">
		<fieldset>	\
		
			<legend><b>Edit Info</b></legend>
			<table cellpadding="5px">
			<tr>
					<td>
			Id:<br><input type="text" name="id" class="input" value="">
			</td>
				<td>
			Username:<br><input type="text" name="uname" class="input" value="">
			</td>
			
			
				<td>
			Email:<br><input type="email" name="email" class="input" value="">
			</td>
			
			
				<td>
			Password <br><input type="password" name="pass" class="input" value="">
			</td>
			
			
				<td>
			Confirm Password<br><input type="password" name="cpass" class="input" value="">
			</td>
			

			
			<td>
			<input type="radio" name="utype" value="Admin"/>Admin <br>
			<input type="radio" name="utype" value="Seller"/>Seller <br>
			<input type="radio" name="utype" value="Buyer"/>Buyer
			
			</td>
			
			
			
			<tr>
			<td style="border-top:1px solid #888;">
			<input type="submit" name="Add" value="Add"/>
			<input type="submit" name="Update" value="Update"/>
			<input type="submit" name="Delete" value="Delete"/>
			</td>
			</tr>

			
			</table>

			

		</fieldset>	
		

	</form>
<form method="POST" action="">
	<table>
				<tr>
				<td>
				<input type="submit" name="Back" value="Back" method="POST" action=""/>
				</td>
			</tr>
			</table>

</form>


		<legend>
			<b>Search</b>
		</legend>
		<table>
			<tr>
				<td>
					<input type="text" name="search" class="input" id="search" onkeyup="search(this.value)"><br>
					<div id="result"></div>
				</td>
					<td>
					<input type="submit" name="go" id="go" value="Go" onclick="show(document.getElementById('search').value)">
				</td>
			</tr>
<tr>
	<td>
<div id="output"></div>
</td>
</tr>
		</table>

</body>
</html>
<?php
}
else{
	header('location:../html/signin.html');
}
?>