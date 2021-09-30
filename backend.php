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
                <form action="login.php" method="post">
                    <input type="text" name="uname" placeholder="Enter Username" required>
                    <input type="password" name="password" placeholder="Enter Password" required>
                    <button type="submit">Login</button>
                </form>
                <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	        <?php } ?>
            </div>

        </div>
    </div>
</body>

</html>