<?php
if(isset($_COOKIE['uname'])){

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="">
<input type="submit" name="Sdays" value="Last 7 days">
<input type="submit" name="thirtdays" value="Last 30 days">
<input type="submit" name="mnth" value="Last 6 month">
<input type="submit" name="year" value="Last 1 year"> <br>
<img src="Analytics.jpg" alt="A">
<?php
if (isset($_POST['sdays'])) {
	//echo "<img src="Analytics.jpg" alt="A">";
	//header('location:Analytic.php');
?>
<?php
}

?>
</form>
<a href="AdminHome.php">Home</a>
</body>
</html>
<?php
}
else{
	header('location:../html/signin.html');
}
?>