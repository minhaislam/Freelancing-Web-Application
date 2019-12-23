<?php
	if (isset($_POST['accept'])) {

		$req=$_POST['req'];
		$line = $_POST['lineNumber']-1;

		if ( ! empty($req)) {
			
			$accept = fopen('../txt/Approved.txt', 'a+');
			$save=fwrite($accept, "$req"."\n");
			fclose($accept);

			// delete
			$name='../txt/requests.txt';
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
			
			header('location: Jobreq.php');
		}
	}
	if (isset($_POST['deny'])) {

		$req=$_POST['req'];
		$line = $_POST['lineNumber']-1;

		if ( ! empty($req)) {

			// delete
			$name='requests.txt';
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
			
			header('location: Jobreq.php');
		}
	}
	if(isset($_COOKIE['uname'])){

?>



<!DOCTYPE html>
<html>
<head>
	<title>Job Requests</title>
</head>
<body>
	<legend>Pending Requests</legend>
	<?php

		$name='../txt/requests.txt';
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
				<tr><input type="text" style="height: 70px;width: 70%" name="req" value="<?php echo $line; ?>"> </tr>
				<tr><input type="submit" name="accept" value="accept"></tr>
				<tr><input type="submit" name="deny" value="deny"></tr>	
			</table>
		</form>
	<?php
			$lineNumber++;

		}
	?>

<a href="AdminHome.php"> Back</a>
</body>
</html>
<?php
}
else{
	header('location:signin.php');
}
?>
