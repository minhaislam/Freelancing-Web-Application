<?php
if(isset($_COOKIE['uname'])){

?>





<!DOCTYPE html>
<html>
<head>
	<title>Freelancer Details</title>
</head>
<body>
	<legend>List of All freelancer with details</legend>
<table border="1">
	<thead>
		<tr>
			<td>Name</td>
			<td>Catagory</td>
			<td>Completed Job</td>
			<td>Average Response Time</td>
			<td>Overall Review</td>

		</tr>

	</thead>
	<tbody>
		<?php
         
	$read = fopen('../txt/freelancer.txt', 'r');
	$fetch='';
	if (filesize('../txt/freelancer.txt')>0) {
		$fetch = fread($read, filesize('../txt/freelancer.txt'));
	}
	
	//$fetch = fread($read, filesize('data.txt'));
	fclose($read);

	$lines=explode("\n", $fetch);
          
        foreach ($lines as $line) {

        	if ($line != '' ) {
        		$user = explode("|", $line);		

		
	?>
		<tr>
			<td><a href="history.php"><?php echo $user[0];?></a></td>
			<td><?php echo $user[1];?></td>
			<td><?php echo $user[2];?></td>
			<td><?php echo $user[3];?></td>
			<td><?php echo $user[4];?></td>
		</tr>
<?php
}
}
?>
	</tbody>

</table>
<br>

<a href="AdminHome.php">Home</a>
</body>
</html>
<?php
}
else{
	header('location:../html/signin.html');
}
?>