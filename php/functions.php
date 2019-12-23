<?php
require_once('../db/database.php');

function ids1($id){
		$con = dbconnect();
		$sql = "select id from info where uname='{$id}'";
		$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);
		
return $data['id'];
	}


?>