
$(document).ready(function () {

    $("#loginBtn").click(function () {

        var username = $("#username").val();
        var password = $("#password").val();

        if (username == '' || password == '') {
            $("p").append('please fill all fields');
            return false;
        }

        $.ajax({
            type: "POST",
            url: "/legitjobs/engine/login.php",
            data: {
                username: username,
                password: password
            },
            cache: false,
            success: function (data) {
                if(data == "good") {
                   window.location.href = "waiting.php";
                } else {
                    $('p').append(data);
                }   
            },
            error: function (xhr, status, error) {
                console.error(xhr);
            }
        });

    });

});
