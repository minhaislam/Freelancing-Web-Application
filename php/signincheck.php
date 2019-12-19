<?php
	session_start();
if(isset($_POST['login'])){
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		
		
		if(empty($email) == true || empty($pass) == true){
			echo "fill all!";
		}
		else{
           
			$conn=mysqli_connect('localhost','root','','fwa');
			$sql="select * from info where email='{$email}' and pass='{$pass}'";
			$get=mysqli_query($conn,$sql);
			$user=mysqli_fetch_assoc($get);

		if(	count($user) >0){

				if($user["utype"]=='Admin'){
					setcookie("uname", $user["uname"], time()+3600, "/");
			$_SESSION['uname']=$user["uname"];
			header('location:AdminHome.php');

		}
		

		elseif($user["utype"]=='Seller'){
					setcookie("uname", $user["uname"], time()+3600, "/");
			$_SESSION['uname']=$user["uname"];
			header('location: ../html/SellerHome.html');

		}
		elseif($user["utype"]=='Buyer'){
					setcookie("uname", $user["uname"], time()+3600, "/");
			$_SESSION['uname']=$user["uname"];
			header('location: ../html/BuyerHome.html');

		}
		
		}
		else{
		header('location:../signin.html');
	}		

	}
	
	
	}


?>