<?php
session_start();
if (isset($_POST['Seller'])) {
	
	$_SESSION['utype']='Seller';
	header('location:../html/Registration.html');
}
elseif (isset($_POST['Buyer'])) {
	$_SESSION['utype']='Buyer';
	header('location:../html/Registration.html');
}
else{
	header('location:home.html');
}

?>