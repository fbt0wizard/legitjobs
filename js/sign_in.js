const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');

togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});


$(document).ready(function () {

    $("#loginBtn").click(function (event) {
        event.preventDefault();
        var username = $("#username").val();
        var password = $("#password").val();

        if (username == '') {
            $(".error_login").html('Username cannot be empty');
            $('.error_login').css("visibility", "visible");
            return false;
        }
        if (password == '') {
            $(".error_login").html('Password cannot be empty');
            $('.error_login').css("visibility", "visible");
            return false;
        }

        $.ajax({
            type: "POST",
            url: "/legitjobs/engine/client_login.php",
            data: {
                username: username,
                password: password
            },
            cache: false,
            success: function (data) {
                if(data == "good") {
                   window.location.href = "index.php";
                } else {
                    $('.error_login').html(data);
                    $('.error_login').css("visibility", "visible");
                }   
            },
            error: function (xhr, status, error) {
                console.error(xhr);
            }
        });

    });

});
