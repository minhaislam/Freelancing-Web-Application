<?php

	$uname= $_REQUEST['uname'];
	$msg= $_REQUEST['msg'];

	//$con = mysqli_connect('localhost','root','','chatbox');
	

/*	mysqli_query("INSERT INTO logs ('username' , 'msg') VALUES ('$uname','$msg')");

	$sql = "insert into logs values('{$uname}','{$msg}')";

	$result1 = mysqli_query("SELECT * FROM logs ORDER by id DESC");

	while($extract = mysqli_fetch_array(result1)){

		echo $extract['username'] . ": " . $extract['msg'] . "<br>";
	}
*/


	$conn=mysqli_connect('localhost','root','','chatbox');

			$sql="insert into logs(username,msg) values('{$uname}','{$msg}')";
			$q1= "SELECT * FROM logs ORDER by id DESC";	
		
		$result1 = mysqli_query($conn,$sql);
		$result2 = mysqli_query($conn,$q1);
		
	while ($row=mysqli_fetch_assoc($result2)){
			echo $row['username'] . ": " . $row['msg'] . "<br>";
	}
				
?>