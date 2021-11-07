function validation() {
    document.getElementById("passNot").innerHTML = "";
    document.getElementById("regError").style.color = "red";
 
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


function passwordMatch() {
    document.getElementById("passNot").innerHTML = "";
    var firstPass = document.getElementById("password").value;
    var secontPass = document.getElementById("password2").value;
    if(firstPass == secontPass) {
    } else {
        document.getElementById("passNot").innerHTML = "password do not match"
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

function clearError() {
    document.getElementById("errF").innerHTML = "";
}



$(document).ready(function () {

    $("#regBtn").click(function (event) {
        event.preventDefault();
        var first_name = $("#fName").val();
        var last_name = $("#lName").val();
        var email = $("#email").val();
        var v_email = $("#email2").val();
        var password = $("#password").val();
        var v_password = $("#password2").val();
        var username = $("#userName").val();
        var phone = $("#phone").val();

        $.ajax({
            type: "POST",
            url: "engine/client_signup.php",
            data: {
                first_name: first_name,
                last_name: last_name,
                email: email,
                v_email: v_email,
                password: password,
                v_password: v_password,
                username: username,
                phone: phone,
            },
            cache: false,
            success: async function (data) {
                if(data == 'ok') {
                    const waiting = await Swal.fire({
                        tittle: 'Registration Succesfull!',
                        icon: 'success',
                        html:  '<p style="font-size: 14px; color: green">Please sign in now</p>'   
                    })
                    if(waiting) {
                        location.href="sign_in.php"
                    } 
                } else {
                    $('#errF').html(data);
                }   
            },
            error: function (xhr, status, error) {
                console.error(xhr);
            }
        });

    });

});
