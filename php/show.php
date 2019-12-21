<?php
	
	require_once('../db/database.php');
	$term = $_POST['key'];
	$con = dbconnect();
	$sql = "select * from info where email='{$term}'";
	$result = mysqli_query($con, $sql);
	$row = "";
	$data = mysqli_fetch_assoc($result);
		$row= $data;
	if (!empty($row)) {
		echo $data['email']."|".$data['uname']."|".$data['utype'] ;
	}
	else{
		echo "doesn't exist";
	}
	
?>