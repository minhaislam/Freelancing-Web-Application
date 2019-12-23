"use strict"

function show1(val){
			 
				var xhttp = new XMLHttpRequest();
				xhttp.open("POST", "../php/show1.php", true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send('key='+val);
			
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					 	document.getElementById('output').innerHTML = this.responseText;					 
						
					}
					else {
						return false;
					}
				};
		}


		

