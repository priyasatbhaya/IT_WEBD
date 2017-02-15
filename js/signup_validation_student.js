function validateForm() {
	
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