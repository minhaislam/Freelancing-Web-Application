<?php

if(isset($_COOKIE['uname'])){

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../Css/css.css" />
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
			
		
			<div s>Admin:<?php echo $a;?></div>
		

	
			<div >Buyer:<?php echo $b;?></div>
		

		
			<div >Seller:<?php echo $s;?></div>
		
		
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

<a href="adminhome.php"><img src="../img/home.png" width="30px" height="30px" title="Profile" ></a>
</body>
</html>
<?php
}
else{
	header('location:../html/signin.html');
}
?>