

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
            success: function (data) {
                if(data == 'ok') {
                    Swal.fire(
                        'Registration Succesfull!',
                        '<p style="font-size: 14px; color: green">Please sign in now</p>',
                        'success'
                    )
                      setTimeout(function(){location.href="sign_in.php"} , 5000); 
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
