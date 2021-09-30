<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="/legitjobs/css/sign-up.css">
    <link rel="stylesheet" href="/legitjobs/css/intlTelInput.css">
</head>

<body>
    <div class="flex-container">
        <div>
            <h2 class="heading">Sign Up</h2>

            <form action="client_signup.php" method="post">
                <div class="names">
                    <input type="text" name="fname" id="fName" placeholder="First Name">
                    <input type="text" name="lname" id="lName" placeholder="Last Name">
                </div>
                <div class="email">
                    <input type="email" name="email" id="email" placeholder="Email Address">
                    <input type="email" name="email2" id="email2" placeholder="Re-Enter Email Address">
                </div>
                <div class="password">
                    <input type="password" name="password" id="password" placeholder="Password">
                    <input type="password" name="password2" id="password2" placeholder="Re-Enter Password">
                </div>
                <div class="phone">
                    <input type="text" name="username" id="userName" placeholder="Username" >
                    <input id="phone" type="tel" name="phone" placeholder="Phone Number">
                </div>
                <div class="submit-btn">
                    <button type="submit" name="submit">Submit</button>
                </div>
                <p>Already have an account? <a href="./sign_in.php">Sign In</a></p>
            </form>
        </div>
    </div>
    <script src="/legitjobs/js/intlTelInput.min.js"></script>
    <script src="/legitjobs/js/sign-up.js"></script>
</body>

</html>