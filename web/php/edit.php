
<?php

session_start();


if (isset($_POST['Update'])) {
		

		
		$uname = $_POST['uname'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$cpass = $_POST['cpass'];
		//$utype =$_POST["utype"];
		$id=$_GET['id'];

		
	 if ($pass!=$cpass) {
			echo "password doesn't match";	
		}
		else{
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


           else{
            $conn=mysqli_connect('localhost','root','','fwa');
			$sql="update info SET uname='{$uname}' where id='{$id}'";
			$set=mysqli_query($conn,$sql);
		header('location: viewinfo.php');
		mysqli_close($conn);
				}
		}

		 if (empty($pass)==false && empty($pass)==false) 
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
		}


elseif (isset($_POST['Back'])) {
			header('location: ViewInfo.php');
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
	<title></title>
</head>
<body>
<form method="POST" action="">
		<fieldset>	\
		
			<legend><b>Edit Info</b></legend>
			<table cellpadding="5px">
			<tr>
					
				<td>
			Username:<br><input type="text" name="uname" value="">
			</td>
			
			
				<td>
			Email:<br><input type="email" name="email" value="">
			</td>
			
			
				<td>
			Password <br><input type="password" name="pass" value="">
			</td>
			
			
				<td>
			Confirm Password<br><input type="password" name="cpass" value="">
			</td>
			

			
			<td>
			<input type="radio" name="utype" value="User"/>User <br>
			<input type="radio" name="utype" value="Admin"/>Admin
			
			</td>
			
			
			
			<tr>
			<td style="border-top:1px solid #888;">		
			<input type="submit" name="Update" value="Update"/>
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
</body>
</html>


			<?php
}
else{
	header('location:../html/signin.html');
}
?>