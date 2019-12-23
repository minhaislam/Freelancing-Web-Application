"use strict"

function send(){
				var to=document.getElementById('output').textContent;
				var from=document.getElementById('sender').textContent;
				var message=document.getElementById('message').value;
				//alert(to+""+from+""+message);

				var xhttp = new XMLHttpRequest();
				//xhttp.open("GET", "../php/send.php?To="+to"&From="+from"&Message="+message, true);
				xhttp.open("GET", "../php/send.php?To="+to+"&From="+from+"&Message="+message, true);
				//xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send();
			
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					 	document.getElementById('received').innerHTML = this.responseText;
					 	//alert(document.getElementById('received').innerHTML);			
					 	//alert(this.responseText);	 
						
					}
					else {
						return false;
					}
				};
		}


		

