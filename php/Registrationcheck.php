<?php
require_once('phpverify.php');
session_start();
if(isset($_POST['signup'])){
		$uname = $_POST['uname'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$cpass = $_POST['cpass'];	
		$utype=$_SESSION['utype'];

		
		if(empty($uname)==true || empty($email)==true || empty($pass) == true ||empty($cpass) == true)
		{
			echo "fill all!";
		}
		elseif ($pass!=$cpass)
		 {
		echo "password doesn't match";	
		} 
		else if (funame($uname) && femail($email) && fpass($pass) && fcpass($cpass)) 
		{
			//return true;
	
			if (checkUniqueValue($uname)) 
			{
				echo "Sorry. This username is already taken.";
				//header('location: Registration.php');
				
			
				//exit();
			}

			if (checkUniqueValue($email)) 
			{
				echo "Sorry. This email has been used already.";
				//header('location: Registration.php');
				
				//exit();
			}
			else{
            $conn=mysqli_connect('localhost','root','','fwa');
			$sql="insert into info(uname,email,pass,cpass,utype) values('{$uname}','{$email}','{$pass}','{$cpass}','{$utype}')";
			$set=mysqli_query($conn,$sql);
		header('location:../html/signin.html');
		mysqli_close($conn);
}
	}
			}


		/*	function checkUniqueValue($value){
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
		}*/

?>


