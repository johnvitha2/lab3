function checkpassword() {
    var password1 = document.getElementById("pass1").value;
    var password2 = document.getElementById("pass2").value;

    if (password1.length < 8) {
        alert("The length of the first password is less than 8 letters.")
    } else if (password2.length < 8) {
        alert("The length of the second password is less than 8 letters.")
    } else if (password1 != password2) {
        alert("Passwords do not match.")
    } else {
        alert("Passwords match!")
    }
}