<?php

if(isset($_COOKIE['uname'])){

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>No of users:</h1>
<table>
	
	<tr>
		<?php
          	  $conn=mysqli_connect('localhost','root','','fwa');
			$sql="select * from info";
			$get=mysqli_query($conn,$sql);
			$a=0;
			$b=0;
			$s=0;
   if(count($get)>0){
	while ($user=mysqli_fetch_assoc($get)) {
		if ($user['utype']=='Admin') {
		$a=$a+1;	
	}
		if ($user['utype']=='Buyer') {
		$b=$b+1;	
	}
	if ($user['utype']=='Seller') {
		$s=$s+1;	
	}
		  		
    	}
    	?>
			
		<td style="padding:0 50px;">
			<div style="background-color: #336699; color: #ffcc00;text-align: center;">Admin:<?php echo $a;?></div>
		</td>

		<td style="padding:0 55px;">
			<div style="background-color: #336699; color: #ffcc00;text-align: center;">Buyer:<?php echo $b;?></div>
		</td>

		<td style="padding:0 50px;">
			<div style="background-color: #336699; color: #ffcc00;text-align: center;">Seller:<?php echo $s;?></div>
		</td>
		
		 <?php
    	}
	
	?>	
	</tr>
	

</table>

<?php
if (isset($_POST['sdays'])) {
	//echo "<img src="Analytics.jpg" alt="A">";
	//header('location:Analytic.php');
?>
<?php
}

?>

<a href="AdminHome.php">Home</a>
</body>
</html>
<?php
}
else{
	header('location:../html/signin.html');
}
?>