function validateForm(){
    // create a shortcut to our form
    let form = document.frmApp;

    // get the name that the user entered
    let fullName = form.txtName.value.trim();

    // create a boolean variable (true/false) that tracks if the user correctly entered their name
    let validInput = true;

    // to test if a name was entered
    if (fullName.length == 0){
        document.getElementById("divMsg").textContent = "Please enter your name!";
        validInput = false;
        // or you can use return false; here to skip the rest of the code from running
    }

    // add more validation for the other inputs

    return validInput;
}

// login form validation
function validateLoginForm(){
    // create a shortcut to our form
    let form = document.frmLogin;

    // get the user name that the user entered
    let userName = form.txtUserName.value.trim();
    // get the password that the user entered
    let password = form.pwdUser.value.trim();

    // create a boolean variable (true/false) that tracks if the user correctly entered their name
    let validInput = true;

    // reset form style and message text each time the validator function runs
    document.getElementById("divMsg").innerHTML = "";
    document.getElementById("lblUserName").style.color = "";
    document.getElementById("txtUserName").style.backgroundColor = "";
    document.getElementById("lblPassword").style.color = "";
    form.pwdUser.style.backgroundColor = "";

    // to test if a user name was entered that is at least 6 characters
    if (userName.length < 6){
        document.getElementById("divMsg").innerHTML = "Please check your username!<br>";
        validInput = false;
        // turn the label and text box yellow
        document.getElementById("lblUserName").style.color = "yellow";
        document.getElementById("txtUserName").style.backgroundColor = "yellow";
        // or you can use return false; here to skip the rest of the code from running
    }

    // to test if a password was entered that is at least 8 characters
    if (password.length < 8){
        document.getElementById("divMsg").innerHTML += "Please re-enter your password!";
        validInput = false;
        // or you can use return false; here to skip the rest of the code from running
        // turn the label & text box yellow
        document.getElementById("lblPassword").style.color = "yellow";
        form.pwdUser.style.backgroundColor = "yellow";
    }

    return validInput;
}