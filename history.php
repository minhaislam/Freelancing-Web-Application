<?php
if(isset($_COOKIE['uname'])){

?>


?>


<!DOCTYPE html>
<html>
<head>
	<title>Work Hostory</title>
</head>
<body>
	<legend>Freelancers work Hostory</legend>
<table border="1">
	<thead>
		<tr>
			<td>Job Details</td>
			<td>Duration</td>
			<td>Amount</td>
			<td>Client review</td>
			

		</tr>

	</thead>
	<tbody>
		<?php
         
	$read = fopen('../txt/history.txt', 'r');
	$fetch='';
	if (filesize('../txt/history.txt')>0) {
		$fetch = fread($read, filesize('../txt/history.txt'));
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
			
		</tr>
<?php
}
}
?>
	</tbody>


</table>

<a href="FreelancerDetails.php">Back</a><br>
<a href="AdminHome.php">Home</a>
</body>
</html>
<?php
}
else{
	header('location:../html/signin.html');
}
?>