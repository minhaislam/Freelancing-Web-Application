<?php
	
	require_once('../db/database.php');
	$term = $_POST['key'];
	$con = dbconnect();
	$sql = "select email from info where email like '%{$term}%'";
	$result = mysqli_query($con, $sql);
	$row = "";
	$data = mysqli_fetch_assoc($result);
		$row .= $data['email'];
	if (!empty($row)) {
		echo $row;
	}
	else{
		echo "doesn't exist";
	}
	
?>