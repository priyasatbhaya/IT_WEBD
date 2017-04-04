/*
function validateForm() {
    var x = document.forms["admin_login_form"]["email"].value;
    if (x == "") {
        alert("Email must be filled out");
        return false;
    }
    var x = document.forms["admin_login_form"]["password"].value;
    if (x == "") {
        alert("Password must be filled out");
        return false;
    }
}

*/
function email_in(){
	var x = document.forms["admin_login_form"]["email"].value;
	if(x == "")
	{
		document.forms["admin_login_form"]["email"].style.backgroundColor ="#0D2635";
		document.forms["admin_login_form"]["email"].placeholder = "Harsha";
		document.forms["admin_login_form"]["email"].style.border ="none";
	}
}

function email_out(){
	var x = document.forms["admin_login_form"]["email"].value;
	var regex=/\S+@\S+\.\S+/;
	var x_bool= regex.test(x);
	//alert(x_bool);
	/*if(x_bool== false)
	{
		document.forms["admin_login_form"]["email"].value = "";
		document.forms["admin_login_form"]["email"].placeholder = "enter a valid email";
		document.forms["admin_login_form"]["email"].style.border ="2px solid red";	
		
	} */
	if(x=="")
	{
		document.forms["admin_login_form"]["email"].placeholder = "Username can't be empty";
		document.forms["admin_login_form"]["email"].style.border ="2px solid red";
	}
	else return false;
}

function pass_in(){
	var x = document.forms["admin_login_form"]["password"].value;
	if(x == "")
	{
		document.forms["admin_login_form"]["password"].style.backgroundColor ="#0D2635";
		document.forms["admin_login_form"]["password"].placeholder = "*********";
		document.forms["admin_login_form"]["password"].style.border ="none";
	}
}

function pass_out(){
	var x = document.forms["admin_login_form"]["password"].value;
	if (x == "") {
        document.forms["admin_login_form"]["password"].placeholder = "password must be filled";
		document.forms["admin_login_form"]["password"].style.border ="2px solid red";
		return false;
    
    }
}
