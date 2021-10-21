<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="/legitjobs/css/sign-in.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>
<body>
<div class="flex-container">
        <div>
            <h2 class="heading">Sign In</h2>

            <form method="post">
                <div class="email">
                <input type="text" name="username" id="username" placeholder="Username or Email" required>
                </div>
                <div class="password">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <i class="bi bi-eye-slash" id="togglePassword"></i>
                </div>
                <div class="submit-btn">
                    <button type="submit" id="loginBtn">Submit</button>
                </div>
                <p class="already">Don't have an account? <a href="./sign_up.php">Sign Up</a></p>
                    <p class="success"></p>
                    <p class="error_login">error here</p>
            </form>
        </div>
    </div>

    <script src="/legitjobs/js/jquery-3.6.0.min.js"></script>
    <script src="/legitjobs/js/sign_in.js"></script>
</body>
</html>