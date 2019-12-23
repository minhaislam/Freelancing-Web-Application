<?php

	
	require_once('../db/database.php');
	//require_once('function.php');
	$to = $_REQUEST["To"];
	$from = $_REQUEST["From"];
	$conn = dbconnect();
	
	$sql="select * from info where email='{$to}'";
	$set=mysqli_query($conn,$sql);
	$data1=mysqli_fetch_assoc($set);
	$sql1 = "select * from send where receiver='{$data1['uname']}'";
	$result = mysqli_query($conn, $sql1);
	$data=mysqli_fetch_assoc($result);
	//$row = "";
	echo "To:".$data['receiver']."<br>";
	while($data=mysqli_fetch_assoc($result)){
	if ($data['sender']==$from) {

echo $data['sender'].":".$data['message']."<br>";

	}

}

	
	
?>