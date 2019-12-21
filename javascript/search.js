"use strict"

function search(val){
			
				var xhttp = new XMLHttpRequest();
				xhttp.open("POST", "../php/search.php", true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send('key='+val);
			
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					 	document.getElementById('result').innerHTML = this.responseText;					 
						
					}
					else {
						return false;
					}
				};
		}


		

