<?php
	if (isset($_POST['addC'])) {

		$add=$_POST['add'];
		

		if ( ! empty($add)) {
			
			$added = fopen('catagory.txt', 'a+');
			$save=fwrite($added, "$add"."\n");
			fclose($added);

			
			
			header('location: EditCatagory.php');
		}
	}
	if (isset($_POST['delete'])) {

		$del=$_POST['EditC'];
		$line = $_POST['lineNumber']-1;

		if ( ! empty($del)) {

			// delete
			$name='../txt/catagory.txt';
			$read = fopen($name, 'r');
			$fetch = fread($read, filesize($name));
			$lines= explode("\n", $fetch);

			$newLines = [];

			foreach ($lines as $lineNumber => $lineValue) {
				if ($lineNumber == $line) {
					$newLines[] = '';
				} else {
					$newLines[] = $lineValue . "\n";
				}
			}

			// array to sring converstion 
			$arrayData = array_filter($newLines);

			file_put_contents($name, $arrayData);
			
			header('location: EditCatagory.php');
		}
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
	
	<?php

		$name='../txt/catagory.txt';
		$read = fopen($name, 'r');
		$fetch = fread($read, filesize($name));
		fclose($read);
		$lines=explode("\n", $fetch);
		//echo var_dump($lines);
		$lineNumber = 1;

		foreach (array_filter($lines) as $line) {		
	?>
	
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="hidden" name="lineNumber" value="<?php echo $lineNumber; ?>">

			<table>
				<tr><input type="text" style="height: 70px;width: 70%" name="EditC" value="<?php echo $line; ?>"> </tr>
				<tr><input type="submit" name="delete" value="delete"></tr>	
			</table>
		</form>
	<?php
			$lineNumber++;

		}
	?>
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