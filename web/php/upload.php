<?php
	 if($_FILES['file']['size']>0){
	 	if($_FILES['file']['size']<=15360000000){
	 		if(move_uploaded_file($_FILES['file']['tmp_name'], "images/".$_FILES['file']["name"])){

	 			?>
	 			<script type="text/javascript">
	 				parent.document.getElementById("message").innerHTML = "";
	 				parent.document.getElementById("file").value = "";
	 				window.parent.updatepicture("<?php echo 'images/'.$_FILES['file']["name"];?>");
	 			</script>
	 		<?php

	 		}else{
	 			//the upload failed
	 		}
	 	}else{
	 		//the upload file is too big
	 	}

	 }


?>