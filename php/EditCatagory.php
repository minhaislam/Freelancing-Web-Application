<?php
require_once('../db/database.php');
	if (isset($_POST['addC'])) {
		$add=$_POST['add'];
		$conn = dbconnect();
	
	$sql="insert into catagories(title) values('{$add}')";
	$set=mysqli_query($conn,$sql);
	header('location: EditCatagory.php');
		}
	
	if (isset($_POST['delete'])) {
		
}
	if(isset($_COOKIE['uname'])){
		
	}
	if(isset($_GET['id'])) { 
				$id = $_GET['id'];
				$_SESSION['id']=$id;
$con=dbconnect();
			$sql="DELETE from catagories where id='$id'";
			$set=mysqli_query($con,$sql);
			header('location: EditCatagory.php');
		mysqli_close($conn);
}
	if(isset($_COOKIE['uname'])){

?>



<!DOCTYPE html>
<html>
<head>
	<title>Catagory</title>
</head>
<body>

	<form method="post" action="">
		

			<table>
				<tr><input type="text" style="height: 70px;width: 70%" name="add" value=""> </tr>
				<tr><input type="submit" name="addC" value="Add"></tr>
			</table>
		</form>


		<table>
		<thead>
		<tr>
			<th><div style="background-color:red ">ID</div></th>
			<th> <div style="background-color:red ">Catagory</div></th>
			
		</tr>	
          </thead>

          <tbody>
          	   <?php
          	  $conn=dbconnect();
			$sql="select * from catagories";
			$get=mysqli_query($conn,$sql);
			
   if(count($get)>0){
	while ($catagory=mysqli_fetch_assoc($get)) {
	
	?>
					<tr>
						<td id="cid"><div style="background-color:red "><?php echo $catagory["id"];?></div></td>
		          		<td><div style="background-color:red; color: yellow; "><?php echo $catagory["title"];?></div></td>		     <td> <a href="EditCatagory.php?id=<?php echo $catagory['id']; ?>" style="text-decoration:none; background-color: green; color: white;">Delete</a>
			</td>
		          	</tr>
		         	

    <?php
    		}
    	}
	
	?>	


          </tbody>	
        


	</table>
	
	
	<form method="post" action="">
		

			

<a href="AdminHome.php"> Back</a>
</body>
</html>
<?php
}
else{
	header('location:../html/signin.html');
}
?>