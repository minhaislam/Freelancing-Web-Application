"use strict"

function show3(){
				var from=document.getElementById('search').value;
				var to=document.getElementById('sender').textContent;
				//alert(to+""+from);

				var xhttp = new XMLHttpRequest();
				//xhttp.open("GET", "../php/send.php?To="+to"&From="+from"&Message="+message, true);
				xhttp.open("GET", "../php/show3.php?From="+from+"&To="+to, true);
				//xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send();
			
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					 	document.getElementById('received1').innerHTML = this.responseText;
					 	//alert(document.getElementById('received').innerHTML);			
					 	//alert(this.responseText);	 
						
					}
					else {
						return false;
					}
				};
		}


		

