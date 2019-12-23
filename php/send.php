<?php

	
	require_once('../db/database.php');
	//require_once('function.php');
	$to = $_REQUEST["To"];
	$from = $_REQUEST["From"];
	$message = $_REQUEST["Message"];
	$conn = dbconnect();
	
	$sql="insert into send(sender,receiver,message) values('{$from}','{$to}','{$message}')";
	
	$set=mysqli_query($conn,$sql);
	$sql1 = "select * from send where receiver='{$to}'";
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