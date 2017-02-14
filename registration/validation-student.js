function validateForm() {
    var x = document.forms["student_signup_form"]["username"].value;
    if (x == "") {
        alert("User Name must be filled out");
        return false;
    }
    var x = document.forms["student_signup_form"]["email"].value;
    if (x == "") {
        alert("Email must be filled out");
        return false;
    }
    var x = document.forms["student_signup_form"]["password"].value;
    var y = document.forms["student_signup_form"]["repassword"].value;
    if (x == "") {
        alert("Password must be filled out");
        return false;
    }
    if(x!=y){
        alert("Password does not match");
        return false;
    }
    var x = document.forms["student_signup_form"]["regno"].value;
    if (x == "") {
        alert("Registration Number must be filled out");
        return false;
    }
}