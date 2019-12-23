"use strict"

function show2(){
				var to=document.getElementById('search').value;
				var from=document.getElementById('sender').textContent;
				//alert(to+""+from);

				var xhttp = new XMLHttpRequest();
				//xhttp.open("GET", "../php/send.php?To="+to"&From="+from"&Message="+message, true);
				xhttp.open("GET", "../php/show2.php?To="+to+"&From="+from, true);
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


		

