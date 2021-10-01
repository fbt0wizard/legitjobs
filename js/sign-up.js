function validation() {
    document.getElementById("passNot").innerHTML = "";
    document.getElementById("regError").style.color = "red";
    document.getElementById("serverError").style.display = "none";

 
    double();
    var passEntry = document.getElementById("password").value;
    if(passEntry.length < 6) {
        document.getElementById("regError").innerHTML = "Password too short!";
        return;
    }

    if (!/[^a-zA-Z]/.test(document.getElementById('password').value)) {
        var x = document.getElementById('regError');
        x.innerHTML = 'Password must include at least one number!';
        return;
    }

    var character = document.getElementById("password").value;
    if (character == character.toLowerCase()) {
    document.getElementById("regError").innerHTML = "Password must include at least one uppercase letter!";
    return;
    }
    document.getElementById("regError").style.color = "green";
    document.getElementById("regError").innerHTML = "Password is good!"
}


function validate(event) {
    document.getElementById("errF").innerHTML = "";
    document.getElementById("errL").innerHTML = "";

    var fname = document.getElementById("fName").value;
    var lname = document.getElementById("lName").value;

    if(fname.length <= 2){
        document.getElementById("errF").innerHTML = "first name should be minimum of three characters!";
        event.preventDefault();
        return;
    }
    if(lname.length <= 2){
        document.getElementById("errL").innerHTML = "last name should be minimum of three characters!";
        event.preventDefault();
        return;
    }

    passwordMatch(event)
    var passEntry = document.getElementById("password").value;
    if(passEntry.length < 6) {
        document.getElementById("regError").innerHTML = "Password too short!";
        event.preventDefault();
        return;
    }

    if (!/[^a-zA-Z]/.test(document.getElementById('password').value)) {
        var x = document.getElementById('regError');
        x.innerHTML = 'Password must include at least one number!';
        event.preventDefault();
        return;
    }

    var character = document.getElementById("password").value;
    if (character == character.toLowerCase()) {
    document.getElementById("regError").innerHTML = "Password must include at least one uppercase letter!";
    event.preventDefault();
    return;
    }
}

function passwordMatch(event) {
    document.getElementById("passNot").innerHTML = "";
    var firstPass = document.getElementById("password").value;
    var secontPass = document.getElementById("password2").value;
    if(firstPass == secontPass) {
    } else {
        document.getElementById("passNot").innerHTML = "password do not match"
        event.preventDefault();
        return;
    }
}

function passwordInput() {
    document.getElementById("passNot").style.color = "red";
    var passEntry = document.getElementById("password").value;
    if(passEntry.length < 6) {
        return;
    }

    if (!/[^a-zA-Z]/.test(document.getElementById('password').value)) {
        return;
    }

    var character = document.getElementById("password").value;
    if (character == character.toLowerCase()) {
        return;
    }
    document.getElementById("passNot").innerHTML = "";
    var firstPass = document.getElementById("password").value;
    var secontPass = document.getElementById("password2").value;
    if(firstPass == secontPass) {
        document.getElementById("passNot").style.color = "green";
        document.getElementById("passNot").innerHTML = "password matched"
    } else {
        document.getElementById("passNot").innerHTML = "password do not match"
    }
}

function double() {
    var passEntry = document.getElementById("password").value;
    if(passEntry.length < 6) {
        return;
    }

    if (!/[^a-zA-Z]/.test(document.getElementById('password').value)) {
        return;
    }

    var character = document.getElementById("password").value;
    if (character == character.toLowerCase()) {
        return;
    }
    document.getElementById("passNot").innerHTML = "";
    var firstPass = document.getElementById("password").value;
    var secontPass = document.getElementById("password2").value;
    if(firstPass == secontPass) {
        document.getElementById("passNot").innerHTML = "password matched"
    }
}


// validating first name

function valfName() {
    document.getElementById("errF").innerHTML = "";
}
function vallName() {
    document.getElementById("errL").innerHTML = "";
}