function validateForm() {
    var x = document.forms["student_login_form"]["student_email"].value;
    if (x == "") {
        alert("Email must be filled out");
        return false;
    }
    var x = document.forms["student_login_form"]["student_password"].value;
    if (x == "") {
        alert("Password must be filled out");
        return false;
    }
}