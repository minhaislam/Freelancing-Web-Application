<?php
require_once('../db/database.php');
session_start();
/*if (isset($_POST['send'])) {
	$message=$_POST['message'];
	//$sender=$_POST['sender'];
	$sender=$_SESSION['uname'];
	$receiver=$_POST['output'];

	if (empty($message)==true ||  empty($sender)==true || empty($receiver)==true) {
		echo "empty";
	}else{
	$con = dbconnect();
	$sql="insert into send(sender,receiver,message) values('{$sender}','{$receiver}','{$message}')";
		header('location: Message.php');
}
}*/
if(isset($_COOKIE['uname'])){

?>


<!DOCTYPE html>
<html>
<head>
	<title>Messages</title>
	<script type="text/javascript"  src="../javascript/search.js"></script>
	<script type="text/javascript"  src="../javascript/show1.js"></script>
	<script type="text/javascript"  src="../javascript/send.js"></script>
	<script type="text/javascript"  src="../javascript/show2.js"></script>
	<script type="text/javascript"  src="../javascript/show3.js"></script>
</head>
<body>
<legend>
			<b>Search</b>
		</legend>
		<table>
			<tr>
				<td>
					<input type="text" name="search" id="search" onkeyup="search(this.value)"><br>
					<div id="result"></div>
				</td>
					<td>
					<input type="submit" name="go" id="go" value="Go" onclick="show1(document.getElementById('search').value); show2(); show3();
					">
				</td>
			</tr>
<tr>
	<td>
To:<div id="output" name='output'></div>
</td>
</tr>
		</table>



	From:<div id="sender" name='sender'><?php echo $_SESSION['uname'] ?></div>
	
	<input type="text" style="height: 70px;width: 70%" name="message" value="" id="message">
	<input type="submit" name="send" value="send" id="send" onclick="send()">
</br>
Chats:

<div id="received" name="received"></div>
<br>

	<div id="received1" name="received1"></div>

<br>
<a href="AdminHome.php">Home</a>
</body>
<script type="text/javascript">
	/*function send1 () {
		var to=document.getElementById('output').textContent;
				var from=document.getElementById('sender').textContent;
				var message=document.getElementById('message').value;
				alert(to+""+from+""+message);
	}*/
</script>
</html>
<?php
}
else{
	header('location:../html/signin.html');
}
?>