"use strict"

		function funame() {
			var uname=document.forms["f1"]["uname"];
		//var uname=document.getElementById('uname');
		//var n1 = document.getElementById('n1').textContent;
		//alert(name.value);
		if(uname.value==""){
			//alert('empty');
			document.getElementById('em1').innerHTML="empty";
			return false;
		
		}
		else if(uname.value.length<2){
			//alert('At least two words');
			document.getElementById('em1').innerHTML="At least two words";
		return false;
		}
		else if((uname.value[0]<'A' || uname.value[0]>'Z') && (uname.value[0]<'a' || uname.value[0]>'z')){
			//alert('starts with letter');
			document.getElementById('em1').innerHTML="starts with letter";
			return false;
		}
		else{
			document.getElementById('em1').innerHTML="&#10003";
			return true;
		}
		return uname;
		
		}

		function femail() {
			var email=document.forms["f1"]["email"].value;
			//var email=document.getElementById('email').value;
    //alert(email);
    if (email=="") {
    	document.getElementById('em2').innerHTML="empty";
    return false;
    }
   /* else if (search(email)) {
    	return search(email);
    	//return true;
    }*/
    else{
    	var emailParts = email.split('@');
    	if(emailParts.length !== 2) {
       document.getElementById('em2').innerHTML="Wrong number of @ signs";
        return false;   
    }
    else{
    	 var emailName = emailParts[0];
    var emailDomain = emailParts[1];

    
    if(emailName.length < 1 || emailDomain.length < 3) {
       document.getElementById('em2').innerHTML="Wrong number of @ signs";
    	return false;
    }
    else{
    	 var validChars = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','.','0','1','2','3','4','5','6','7','8','9','_','-'];

    // emailName must only include valid chars
    for(var i = 0; i < emailName.length; i += 1) {
        if(validChars.indexOf(emailName.charAt(i)) < 0 ) {
             document.getElementById('em2').innerHTML="Invalid character in name section";
         	return false;
        }
    }
    for(var j = 0; j < emailDomain.length; j += 1) {
        if(validChars.indexOf(emailDomain.charAt(j)) < 0) {
             document.getElementById('em2').innerHTML="Invalid character in domain section";
             return false;
        }
    }
     if(emailDomain.indexOf('.') <= 0) {
         document.getElementById('em2').innerHTML="Domain must include but not start with .";
        return false;
    }
    else{
    	 var emailDomainParts = emailDomain.split('.');
    if(emailDomainParts[emailDomainParts.length - 1].length < 2) {
         document.getElementById('em2').innerHTML="Domain's last . should be 2 chars or more from the end";
        return false;
    }
    else{
			document.getElementById('em2').innerHTML="&#10003";
			return true;
		}
    }
    }
    }
    }
    return email;
}

function fpass () {
		//var pass=document.getElementById('pass');
		//var n1 = document.getElementById('n1').textContent;
		//alert(name.value);
		var pass=document.forms["f1"]["pass"];
		if(pass.value==""){
			document.getElementById('em3').innerHTML="empty";
        return false;
		}
		else if(pass.value.length<8){
			document.getElementById('em3').innerHTML="must contain 8 characters";
        return false;
		}
		else{
			document.getElementById('em3').innerHTML="&#10003";
			return true;
		}
		return pass;
	}

		function fcpass () {
			var cpass=document.forms["f1"]["cpass"];
		//var cpass=document.getElementById('pass');
		//var n1 = document.getElementById('n1').textContent;
		//alert(name.value);
		if(cpass.value==""){
			document.getElementById('em4').innerHTML="empty";
        return false;
		}
		else if(cpass.value.length!=pass.value.length){
			document.getElementById('em4').innerHTML="length is not same";
        return false;
		}
		else if (cpass.value!=pass.value){
			document.getElementById('em4').innerHTML="not same";
        return false;
		}
		else {
			document.getElementById('em4').innerHTML="&#10003";
			return true;
		}
		
	return cpass;
		
		}
		
		
