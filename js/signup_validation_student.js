/*function validateForm() {
	
	var errors=[];
	
	var x = document.forms["student_signup_form"]["username"].value;
	var x_len=x.length;
	var regex=/^[0-9]+$/;
	if (x == "") {
        errors.push("Name must be filled out");
    }
    if (x.match(regex))
	{
		errors.push("User name Must not input numbers!!");
		
	}
	else if(x_len < 5 || x_len >20)
	{
		errors.push("Please enter the name in range of 5-20 characters");
		
	}
	
	var x = document.forms["student_signup_form"]["password"].value;
	x_len=x.length;
    var y = document.forms["student_signup_form"]["repassword"].value;
	if (x == "") {
        errors.push("Password must be filled out");
		
    
    }
	if(x_len < 8 || x_len >20)
	{
		errors.push("Please enter the password in range of 8-20 characters");
		
		
	}
	else if(x!=y){
        errors.push("Password does not match");
		
        
		}
    
    var x = document.forms["student_signup_form"]["regno"].value;
    if (x == "") {
        errors.push("registration number must be filled out");
		
        
    }
	
	var x = document.forms["student_signup_form"]["cno"].value;
	var regex=/^[0-9]+$/;
	if (!x.match(regex))
	{
		errors.push("Contact number must contain only numbers!!");
	
	}
	
	
	if(errors.length > 0)
	{
		var msg = "ERRORS:\n\n";
		for(var i=0; i<errors.length; i++)
		{
			msg+=errors[i] + "\n";
		}
		alert(msg);
		return false;
	}
	else return true;
	
}
*/

function name_out(){
	var x = document.forms["student_signup_form"]["username"].value;
	var x_len=x.length;
	var regex=/^[0-9]+$/;
    if (x.match(regex))
	{
		document.forms["student_signup_form"]["username"].style.border ="2px solid red";
		document.forms["student_signup_form"]["username"].value ="";
		document.forms["student_signup_form"]["username"].placeholder = "please enter a valid name";
		return false;
	}
	if (x == "") {
        document.forms["student_signup_form"]["username"].placeholder = "Name must be filled";
		document.forms["student_signup_form"]["username"].style.border ="2px solid red";
		return false;
    
    }
	
	if(x_len < 5 || x_len >20)
	{
		alert("Name must be between 5 and 20 characters!")
		return false;
	}
}

function name_in(){
	var x = document.forms["student_signup_form"]["username"].value;
	if(x == "")
	{
		document.forms["student_signup_form"]["username"].style.backgroundColor ="#0D2635";
		document.forms["student_signup_form"]["username"].placeholder = "Your Name";
		document.forms["student_signup_form"]["username"].style.border ="none";
	}
	
}

function dob_out(){
	var x = document.forms["student_signup_form"]["dob"].value;
	if(x=="")
	{
		alert("Please enter a date")
	}
	return false;
}

function branch_out(){
	var x = document.forms["student_signup_form"]["list"].value;
	if(x=="")
	{
		alert("please select a proper branch");
	}
	return false;
}

/*
function age_in(){
	var x = document.forms["admin_signup_form"]["dob"].value;
	if(x=="")
	{
		alert("please enter date of birth");
		document.forms["admin_signup_form"]["age"].style.border ="2px solid red";
		return false;
	}
	else
	{
		document.forms["admin_signup_form"]["age"].style.border ="none";
	}
	return false;
}
*/

function id_in(){
	var x = document.forms["student_signup_form"]["list"].value;
	if(x=="")
	{
		document.forms["student_signup_form"]["regno"].placeholder = "please select your branch";
		document.forms["student_signup_form"]["regno"].style.border ="2px solid red";
		return false;
	}
	else
	{
		document.forms["student_signup_form"]["regno"].style.border ="none";
	}
}

function email_in(){
	var x = document.forms["student_signup_form"]["email"].value;
	if(x == "")
	{
		document.forms["student_signup_form"]["email"].style.backgroundColor ="#0D2635";
		document.forms["student_signup_form"]["email"].placeholder = "sriharshashm@gmail.com";
		document.forms["student_signup_form"]["email"].style.border ="none";
	}
}

function email_out(){
	var x = document.forms["student_signup_form"]["email"].value;
	if(x=="")
	{
		document.forms["student_signup_form"]["email"].placeholder = "email can't be empty";
		document.forms["student_signup_form"]["email"].style.border ="2px solid red";
	}
	return false;
}

function pass_in(){
	var x = document.forms["student_signup_form"]["password"].value;
	if(x == "")
	{
		document.forms["student_signup_form"]["password"].style.backgroundColor ="#0D2635";
		document.forms["student_signup_form"]["password"].placeholder = "*********";
		document.forms["student_signup_form"]["password"].style.border ="none";
	}
}

function pass_out(){
	var x = document.forms["student_signup_form"]["password"].value;
	var x_len=x.length;
	if (x == "") {
        document.forms["student_signup_form"]["password"].placeholder = "password must be filled";
		document.forms["student_signup_form"]["password"].style.border ="2px solid red";
		return false;
    
    }
	if(x_len < 8 || x_len >20)
	{
		alert("Please enter the password in range of 8-20 characters");
		return false;
		
	}
}

function repass_in(){
	var x = document.forms["student_signup_form"]["repassword"].value;
	if(x == "")
	{
		document.forms["student_signup_form"]["repassword"].style.backgroundColor ="#0D2635";
		document.forms["student_signup_form"]["repassword"].placeholder = "*********";
		document.forms["student_signup_form"]["repassword"].style.border ="none";
	}
}

function repass_out(){
	var x = document.forms["student_signup_form"]["repassword"].value;
	var y = document.forms["student_signup_form"]["password"].value;
	if (x == "") {
        document.forms["student_signup_form"]["repassword"].placeholder = "please re-type password";
		document.forms["student_signup_form"]["repassword"].style.border ="2px solid red";
		return false;
    
    }
	if(x!=y)
	{
		alert("passwords do not match!!");
		return false;
	}
}

function cno_in(){
	var x = document.forms["student_signup_form"]["cno"].value;
	if(x == "")
	{
		document.forms["student_signup_form"]["cno"].style.backgroundColor ="#0D2635";
		document.forms["student_signup_form"]["cno"].placeholder = "94930XXXXX";
		document.forms["student_signup_form"]["cno"].style.border ="none";
	}
}

function cno_out(){
	var x = document.forms["student_signup_form"]["cno"].value;
	var regex=/^[0-9]+$/;
	if (x == "") {
        document.forms["student_signup_form"]["cno"].placeholder = "can't leave this empty";
		document.forms["student_signup_form"]["cno"].style.border ="2px solid red";
		return false;
    
    }
	
	if (!x.match(regex))
	{
		document.forms["student_signup_form"]["cno"].value = "";
		document.forms["student_signup_form"]["cno"].placeholder = "enter valid number";
		document.forms["student_signup_form"]["cno"].style.border ="2px solid red"
	}
	
}



function getAge(){
	var dateString = document.forms["student_signup_form"]["dob"].value;
    var today = new Date();
    var birthDate = new Date(dateString);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
    {
        age--;
    }
    document.forms["student_signup_form"]["age"].value = age;
}

function getReg() {
	var dpt = document.forms["student_signup_form"]["list"].value;
	if(dpt=="bt")
		document.forms["student_signup_form"]["regno"].value = "14/BT/";
	if(dpt=="che")
		document.forms["student_signup_form"]["regno"].value = "14/CHE/";
	if(dpt=="civ")
		document.forms["student_signup_form"]["regno"].value = "14/CE/";
	if(dpt=="cse")
		document.forms["student_signup_form"]["regno"].value = "14/CSE/";
	if(dpt=="ee")
		document.forms["student_signup_form"]["regno"].value = "14/EE/";
	if(dpt=="ece")
		document.forms["student_signup_form"]["regno"].value = "14/ECE/";
	if(dpt=="it")
		document.forms["student_signup_form"]["regno"].value = "14/IT/";
	if(dpt=="me")
		document.forms["student_signup_form"]["regno"].value = "14/ME/";
	if(dpt=="mme")
		document.forms["student_signup_form"]["regno"].value = "14/MME/";

}