function validateForm() {
    var x = document.forms["admin_signup_form"]["username"].value;
    if (x == "") {
        alert("User Name must be filled out");
        return false;
    }
    var x = document.forms["admin_signup_form"]["email"].value;
    if (x == "") {
        alert("Email must be filled out");
        return false;
    }
    var x = document.forms["admin_signup_form"]["password"].value;
    var y = document.forms["admin_signup_form"]["repassword"].value;
    if (x == "") {
        alert("Password must be filled out");
        return false;
    }
    if(x!=y){
        alert("Password does not match");
        return false;
    }
    var x = document.forms["admin_signup_form"]["adminid"].value;
    if (x == "") {
        alert("Registration Number must be filled out");
        return false;
    }
}

function getAge(){
    var dateString = document.forms["admin_signup_form"]["dob"].value;
    var today = new Date();
    var birthDate = new Date(dateString);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
    {
        age--;
    }
    document.forms["admin_signup_form"]["age"].value = age;
}

function getAdminid() {
    var dpt = document.forms["admin_signup_form"]["list"].value;
    if(dpt=="bt")
        document.forms["admin_signup_form"]["adminid"].value = "14/BT/";
    if(dpt=="che")
        document.forms["admin_signup_form"]["adminid"].value = "14/CHE/";
    if(dpt=="civ")
        document.forms["admin_signup_form"]["adminid"].value = "14/CE/";
    if(dpt=="cse")
        document.forms["admin_signup_form"]["adminid"].value = "14/CSE/";
    if(dpt=="ee")
        document.forms["admin_signup_form"]["adminid"].value = "14/EE/";
    if(dpt=="ece")
        document.forms["admin_signup_form"]["adminid"].value = "14/ECE/";
    if(dpt=="it")
        document.forms["admin_signup_form"]["adminid"].value = "14/IT/";
    if(dpt=="me")
        document.forms["admin_signup_form"]["adminid"].value = "14/ME/";
    if(dpt=="mme")
        document.forms["admin_signup_form"]["adminid"].value = "14/MME/";

}