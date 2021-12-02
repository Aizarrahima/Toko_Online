<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <link rel="stylesheet" href="../../assets/css/style-sign-up.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
        <section>
            <div class="imgBx">
                <img src="../../assets/images/cover2.png" alt="cover">
            </div>
            <div class="contentBx">
                <div class="formBx">
                    <h2>Register</h2>
                    <form action="../signup/proses_signup.php" method="post">
                        <div class="inputBx">
                            <span>First Name</span>
                            <input type="text" name="first_name">
                        </div>
                        <div class="inputBx">
                            <span>Last Name</span>
                            <input type="text" name="last_name">
                        </div>
                        <div class="inputBx">
                            <span>Email</span>
                            <input type="email" name="email">
                        </div>
                        <div class="inputBx">
                            <span>Password</span>
                            <input type="password" name="password">
                        </div>
                        <div class="inputBx">
                            <span>Confirm Password</span>
                            <input type="password" name="confirm_password">
                        </div>
                        <div class="inputBx">
                            <input type="submit" value="Create Account">
                        </div>
                    </form>
                    <h3>Login with social media</h3>
                    <ul class="sci">
                        <li><i class="fab fa-facebook"></i></li>
                        <li><i class="fab fa-twitter"></i></li>
                        <li><i class="fab fa-instagram"></i></li>
                    </ul>
                </div>
            </div>
        </section>
    </body>
</html>