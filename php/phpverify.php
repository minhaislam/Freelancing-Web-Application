
<?php
require_once('../db/database.php');


			function checkUniqueValue($value){
				// $conn=mysqli_connect('localhost','root','','fwa');		
				$conn=dbconnect();				

			$found = 0;
						$sql="select * from info where uname='{$value}' or email='{$value}'";
			$get=mysqli_query($conn,$sql);
			$user=mysqli_fetch_assoc($get);
						if($user["uname"] == $value){
							$found = 1;

						}
						if($user["email"] == $value){
							$found = 1;
						}
					
			return $found;
		}

		function funame($uname){
				if (strlen($uname)<2) {
					echo 'Atleast 2 words required';
					return false;
				}
				
		elseif(($uname[0]<'A' || $uname[0]>'Z') && ($uname[0]<'a' || $uname[0][0]>'z')){
			//alert('starts with letter');
			echo "starts with letter";
			return false;
		}
		
		return $uname;


		}
		function fpass ($pass) {
		
		
		 if(strlen($pass)<8){
			echo "must contain 8 characters";
        return false;
		}
		return $pass;
	}
	function fcpass ($cpass) {
		
		
		 if(strlen($cpass)<8){
			echo "must contain 8 characters";
        return false;
		}
		return $cpass;
	}

	function femail($email) {
			
   
    
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		 { 
		 	echo "Wrong email";
   				return false;
		}
		else{
    return $email;
}
}


		?>