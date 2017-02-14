function validateForm() {
    var x = document.forms["admin_login_form"]["admin_email"].value;
    if (x == "") {
        alert("Email must be filled out");
        return false;
    }
    var x = document.forms["admin_login_form"]["admin_password"].value;
    if (x == "") {
        alert("Password must be filled out");
        return false;
    }
}