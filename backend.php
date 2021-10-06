<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend</title>
    <link rel="stylesheet" href="./css/backend.css">
</head>
<body>
    <div class="login-container">
        <img src="./images/Group 1.png" alt="logo">
        <div class="main-container">
            <div class="login-form">
                <form method="post" id="form">
                    <input type="text" name="username" id="username" placeholder="Enter Username" required>
                    <input type="password" name="password" id="password" placeholder="Enter Password" required>
                    <button type="button" id="loginBtn">Login</button>
                </form>
               <p class="error"></p>
            </div>

        </div>
    </div>
    <script src="/legitjobs/js/jquery-3.6.0.min.js"></script>
    <script src="/legitjobs/js/backend.js"></script>
</body>

</html>