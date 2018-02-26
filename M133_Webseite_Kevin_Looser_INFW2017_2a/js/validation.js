//------------------------------------------------//
//---------- JavaScript for Validation -----------//
//------------------------------------------------//

/**
 * This function checks, if the repeated password
 * is identical to the given or chosen password.
 * On a mismatch, the field will appear red and
 * a fail message will be displayed. On a match,
 * the field will appear green and a success
 * message will be displayed.
 */
function checkPasswords() {
    var password1 = document.getElementById("password02");
    var password2 = document.getElementById("rptPW");
    var message = document.getElementById("message");
    var messageblock = document.getElementById("confirmPW");

    messageblock.style.display = "block";

    if (password1.value == password2.value) {
        password2.style.borderColor = "#66CC66";
		message.style.color = "#66CC66";
        message.innerHTML = "Passwords Match!";
    } else {
        password2.style.borderColor = "#ff6666";
		message.style.color = "#ff6666";
        message.innerHTML = "Passwords Do Not Match!";
    }
}

/**
 * This is JQery. This part hadnles the display
 * of the password hint. On focus, it will show,
 * on blur it will hide.
 */
$(document).ready(function(){
    $("#password02").focus(function(){
        $("#hint").css("display", "block");
    });
    $("#password02").blur(function(){
        $("#hint").css("display", "none");
    });
});

/**
 * This function hides the hint message on call.
 * This function is not in use, as it has been replaced
 * by jquery for administrative reasons.
 */
function hideHint() {
    var hint = document.getElementById("hint");

    hint.style.display = "none";
}

/**
 * This function shows the hint message on call.
 * This function is not in use, as it has been replaced
 * by jquery for administrative reasons.
 */
function showHint() {
    var hint = document.getElementById("hint");

    hint.style.display = "block";
}

/**
 * This function checks if all required fields in
 * the register part are filled out. Invalid fields
 * will appear red, valid fields will appear green.
 * If the check succeeds, the button will be activated.
 * Otherwise, the button remains inactive.
 */
function checkRegister() {
    var username = document.getElementById("username02");
    var password1 = document.getElementById("password02");
    var password2 = document.getElementById("rptPW");
    var button2 = document.getElementById("button02");

    if (username.checkValidity() && password1.checkValidity() && password2.checkValidity() && password1.value == password2.value) {
        button2.disabled = false;
        password1.style.borderColor = "#66cc66";
        password1.style.backgroundColor = "#66cc66";
        password2.style.borderColor = "#66cc66";
        password2.style.backgroundColor = "#66cc66";
        username.style.borderColor = "#66cc66";
        username.style.backgroundColor = "#66cc66";
    } else {
        button2.disabled = true;
        if(!username.checkValidity()){
            username.style.borderColor = "#ff6666";
            username.style.backgroundColor = "#ff6666";
        } else {
            username.style.borderColor = "#66cc66";
            username.style.backgroundColor = "#66cc66";
        }
        if(!password1.checkValidity()){
            password1.style.borderColor = "#ff6666";
            password1.style.backgroundColor = "#ff6666";
        } else {
            password1.style.borderColor = "#66cc66";
            password1.style.backgroundColor = "#66cc66";
        }
        if(!password2.checkValidity()){
            password2.style.borderColor = "#ff6666";
            password2.style.backgroundColor = "#ff6666";
        } else {
            password2.style.borderColor = "#66cc66";
            password2.style.backgroundColor = "#66cc66";
        }
    }
}

/**
 * This function checks if all required fields in
 * the sign in part are filled out. Invalid fields
 * will appear red, valid fields will appear green.
 * If the check succeeds, the button will be activated.
 * Otherwise, the button remains inactive.
 */
function checkSignIn() {
    var username = document.getElementById("username01");
    var password = document.getElementById("password01");
    var button = document.getElementById("button01");

    if (username.checkValidity() && password.checkValidity()) {
        button.disabled = false;
        password.style.borderColor = "#66ff66";
        password.style.backgroundColor = "#66ff66";
        username.style.borderColor = "#66ff66";
        username.style.backgroundColor = "#66ff66";
    } else {
        button.disabled = true;
        if(!username.checkValidity()){
            username.style.borderColor = "#ff6666";
            username.style.backgroundColor = "#ff6666";
        } else {
            username.style.borderColor = "#66ff66";
            username.style.backgroundColor = "#66ff66";
        }
        if(!password.checkValidity()){
            password.style.borderColor = "#ff6666";
            password.style.backgroundColor = "#ff6666";
        } else {
            password.style.borderColor = "#66ff66";
            password.style.backgroundColor = "#66ff66";
        }
    }
}

/**
 * This function tells, if the registration
 * was successfull.
 */
function showSuccess(){
    alert("Registration was successful!");
    goHome();
}

function showSignIn(){
    alert("Sign In was successful!");
    goHome();
}

/** This function will load on the call of the page.
 * This will deactivate the button.
 */
function disableButton(buttontype) {
    button = document.getElementById(buttontype);
    button.disabled = true;
}