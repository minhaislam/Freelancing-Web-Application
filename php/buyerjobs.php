<?php
	if(isset($_COOKIE['uname'])){

?>



<html>
	<head>
		<title>jobs </title>
	</head>

	<script>

			function submitChat(){

				if(form1.uname.value == '' || form1.msg.value =='')
				{
					alert('You Need To Fill all Fields');
					return;
				}
				form1.uname.readOnly = true;
				form1.uname.style.border = 'none';
				form1.msg.readOnly = true;
				form1.msg.style.border = 'none';
				var uname= form1.uname.value;
				var msg = form1.msg.value;

				var xmlhttp = new XMLHttpRequest();

				xmlhttp.onreadystatechange = function(){
					if(xmlhttp.readyState==4 && xmlhttp.status==200){
						document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
					}
				}
				xmlhttp.open('GET','job.php?uname='+uname+'&msg='+msg,true);
				xmlhttp.send();
			}

	</script>
	
	<body>
		<form name="form1" >
		<center>
			<table border="0">
				<tbody>
					<tr height="100">
						<td width="400px">
							<h1>Jobs <h1>
						</td>
						
						<td width="300">
							<input type="text" name="search">
							<input type="button" name="sc" value="Search">
						</td>
						
						<td width="50">
							<a href="Home.php">Home</a>
						</td>
						
					
						
						<td width="70"> 
							<a href="Messages.php">Messages</a>
						</td>
						
						<td width="85"> 
							<a href="Profile.php">Profile</a>
						</td>
						
						<td width="40"> 
							<a href="Notification.php">Notification</a>
						</td>
						
							<td width="60"> 
							<a href="Logout.php">Log out</a>
						</td>
						
						<td>
						<br>
							<center>
							<a href="Profile.php"><img src="64572.png" width="40px" height="40px"></a><br>
							<p><b> <?= $_COOKIE['uname']?></b></p>
							</center>
						</td>
						
					</tr>
					
					 <tr>
                        <td colspan="8" style="border-top:4px solid #888;"></td>
                    </tr>
					
					<tr>
						<td> <br> </td>
					</tr>
					
					
					
					<tr>
						<td colspan="8"> <font size="+2"> <b> Jobs</b></font> <br> <hr> </td>
					</tr>
					
					 <tr>
                    	<td align="center">Enter your UserName: <input type="text" name="uname"/> 
                    		Your Message: 
                    		<textarea name="msg"></textarea>
                    		<a href="#" onclick ="submitChat()">Send</a><br/><br />

					</tr>					
				</tbody>
			</table>
		</center>
	</form>
	</body>
</html>


<?php		
	}else{
		header('location: Login.php');
	}

?>