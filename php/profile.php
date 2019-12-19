<?php


if(isset($_COOKIE['uname'])){

?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body >
	
		<table border="1">
		<tr>
		<td colspan="2">
			Profile
		</td>
		</tr>
		<tr>
		<td>
		ID
		</td>
		<td>
		16-10101-2
		
		</td>
		</tr>
				<tr>
		<td>
		NAME
		</td>
		<td>
		BOB
		
		</td>
		</tr>
				<tr>
		<td>
		USER TYPE
		</td>
		<td>
		Graphic Designer
		</td>
		</tr>
		<tr>
		<td>
		</td>
		<td>
		<a href="AdminHome.php">Go Home</a><br>
			</td>
		</table>

</body>
</html>
<?php
}
else{
	header('location:../html/signin.html');
}
?>