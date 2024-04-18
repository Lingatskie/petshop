<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>
<div class="register-div">
                <h3 class="sub-title">CREATE YOUR ACCOUNT</h3>
                <form action="login.php" method="post">
                    <div class="input-group">
                        <input type="text" id="firstname" name="firstname" placeholder="First name" required>
                        <input type="text" id="lastname" name="lastname" placeholder="Last name" required>
                    </div>
                    <div class="input-group">
                        <input type="text" id="age" name="age" name="firstname" placeholder="Age" required>
                    </div>
                    <div class="input-group">
                        <input type="address" id="address" name="address" placeholder="Address" required>
                    </div>
                    <div class="input-group">
                        <input type="text" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="input-group">
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                    <br>
                    <input class="signup-btn" type="submit" name="submit" value="Sign up">
                    <p>Already have an account? <a class="signin-btn" href="login.php">Login</a></p>
                </form>
            </div>
</body>
</html>