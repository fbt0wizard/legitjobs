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

            <form action="/legitjobs/client_login.php" method="post">
                <div class="email">
                <input type="text" name="username" id="userName" placeholder="Username or Email" required>
                </div>
                <div class="password">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <i class="bi bi-eye-slash" id="togglePassword"></i>
                </div>
                <div class="submit-btn">
                    <button type="submit" name="sumit">Submit</button>
                </div>
                <p>Already have an account? <a href="./sign_up.php">Sign Up</a></p>
                <?php if (isset($_GET['success'])) { ?>
     		<p class="success"><?php echo $_GET['success']; ?></p>
     	        <?php } ?>
                 <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	        <?php } ?>
            </form>
        </div>
    </div>

    <script src="/legitjobs/js/client_login.js"></script>
</body>
</html>