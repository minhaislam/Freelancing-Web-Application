<?php

	
	require_once('../db/database.php');
	//require_once('function.php');
	$from = $_REQUEST["From"];
	$to = $_REQUEST["To"];
	$conn = dbconnect();
	
	$sql="select * from info where email='{$from}'";
	$set=mysqli_query($conn,$sql);
	$data1=mysqli_fetch_assoc($set);
	$sql1 = "select * from send where sender='{$data1['uname']}'";
	$result = mysqli_query($conn, $sql1);
	$data=mysqli_fetch_assoc($result);
	//$row = "";
	echo "From:".$data['sender']."<br>";
	while($data=mysqli_fetch_assoc($result)){
	if ($data['receiver']==$to) {

echo ":".$data['message']."<br>";

	}

}

	
	
?>