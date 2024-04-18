<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cashiering</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <style>

        *{
            font-family: cursive;
        }

        body{
            background-image: url(logo.png);
            background-repeat: no-repeat;
        }

        .login-box {
    width: 400px; /* Increase the width of the login box */
    margin: 50px auto;
    background: rgba(255, 255, 255, 0.8); /* White with some transparency */
    padding: 40px; /* Increase padding for more space */
    border-radius: 10px; /* Increase border radius for smoother edges */
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2); /* Increase box shadow for depth */
    text-align: center; /* Center align the content */
}

.login-box img {
    width: 200px; /* Increase the width of the image */
    height: auto; /* Maintain aspect ratio */
    margin-bottom: 30px; /* Add more space between the image and the form */
}

input[type="text"],
input[type="password"] {
    font-family: cursive;
    width: calc(100% - 20px);
    padding: 15px; /* Increase padding for input fields */
    margin-bottom: 20px; /* Increase margin between input fields */
    border: 1px solid #ccc;
    border-radius: 5px; /* Increase border radius for smoother edges */
}

input[type="submit"] {
    width: 100%;
    padding: 15px;
    background-color: #ff66cc; /* Pink */
    border: none;
    color: #ffffff;
    cursor: pointer;
    border-radius: 5px;
}

.note{
    border-radius: 5px;
    font-family: cursive;
    background-color: yellow;
    position: fixed;
    padding-top: 4%;
    top: 70%;
    left: 2%;
    width: 20%;
    height: 100px;
    text-align: center;
    box-shadow: -10px -20px lightgray;
}

.head{
    border: 2px solid gray;
    background-color: brown;
    margin-top: -70px;
    border-radius: 0px 5px 0px 0px;
}

span{
    color: gray;
    position: fixed;
    left: 40px;
}

    </style>

    <div class="login-box">
    <h2 style="font-family: cursive;">PetShop</h2>
    <div class="boxing">
        <img src="logo.png" alt="Login Image"> <!-- Replace 'your-image.jpg' with the path to your image -->
        <form action="cashier.php" method="post">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Login">
        </form>
    </div>
    </div>
       
</body>
</html>
