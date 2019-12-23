<?php
	function dbconnect(){
		$con=mysqli_connect('localhost','root','','fwa');
		return $con;

	}

	function profile($value){
		$con=dbconnect();
		$sql="select * from info where uname='{$value}'";
			$get=mysqli_query($con,$sql);
			$user=mysqli_fetch_assoc($get);
			return $user;
	}


?>


