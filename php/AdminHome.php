<?php

session_start();
if(isset($_COOKIE['uname'])){

?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../Css/adminhome.css" />
</head>
<body align="center">
	
	
		<header>
			<h2>FreelanceSite</h2>
			<h1>Welcome Home!!! <?php echo $_SESSION['uname'];?> </h1>
		</header>
		
	<div>	
	
		<div class="pos"><a class="testclass;" href="viewinfo.php">View Info</a></div>
		<div class="pos"><a class="testclass;" href="Jobreq.php">Job req</a></div>
		<div class="pos"><a  class="testclass;" href="FreelancerDetails.php">Freelancer Details</a></div>
		<div><a href="Analytics.php"><img src="../img/analytic.png" width="30px" height="30px" title="Analytics"></a></div>
		<div><a href="UserAnalysis.php"><img src="../img/unal.png" width="30px" height="30px" title="User Analysis"></a></div>
		<div><a href="Message.php"><img src="../img/msg.png" width="30px" height="20px" title="Message"></a></div>
		<div><a href="EditCatagory.php"><img src="../img/editcat.png" width="30px" height="30px" title="Edit Catagory" ></a></div>
		<div><a href="Notification.php"><img src="../img/bell.png" width="30px" height="30px" title="Notification"></a></div>
		<div><a href="profile.php"><img src="../img/profile.png" width="30px" height="30px" title="Profile" ></a></div>
		<div><a href="logout.php"><img src="../img/logout.png" width="25px" height="25px" title="Logout"></a></div>
		
	</div>	
		
		
			
	



</body>



</html>

<?php
}
else{
	header('location:../html/signin.html');
}
?>