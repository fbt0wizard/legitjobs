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

            <form method="post">
            <p class="server-error" id="errF"></p>
                <div class="names">
                    <input type="text" name="fname" id="fName" placeholder="First Name" required oninput="clearError()">
                    <input type="text" name="lname" id="lName" placeholder="Last Name" required oninput="clearError()">
                </div>
                <div class="email">
                    <input type="email" name="email" id="email" placeholder="Email Address" oninput="clearError()" required>
                    <input type="email" name="email2" id="email2" placeholder="Re-Enter Email Address" oninput="clearError()" required>
                </div>
                <div class="password">
                    <label for="password"><input type="password" class="first-entry" oninput="validation()" name="password" id="password" placeholder="Password" required><br><p class="reg-error" id="regError"></p></label>

                    <label for="password2"><input type="password" class="first-entry2" name="password2" id="password2" oninput="passwordInput()" placeholder="Re-Enter Password" required><br><p class="pass-not" id="passNot"></p></label>
                    
                    
                   <!-- <div class="errors"></div> -->

                </div>
                <div class="phone">
                    <input type="text" name="username" id="userName" placeholder="Username" oninput="clearError()" required>
                    <input id="phone" type="tel" name="phone" placeholder="Phone Number" oninput="clearError()" required>
                </div>
                <div class="submit-btn">
                    <button type="submit" id="regBtn" name="submit">Submit</button>
                </div>
                <p class="already">Already have an account? <a href="./sign_in.php">Sign In</a></p>
            </form>
        </div>
    </div>
    <!-- <script src="/legitjobs/js/intlTelInput.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
    <script src="/legitjobs/js/jquery-3.6.0.min.js"></script>
    <script src="/legitjobs/js/sign-up.js"></script>
</body>

</html>