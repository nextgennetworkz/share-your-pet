<?php
/**
 * Created by PhpStorm.
 * User: Nishen Peiris
 * Date: 11/25/18
 * Time: 12:14
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: black;
        }

        * {
            box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {
            padding: 16px;
            background-color: white;
        }

        /* Full-width input fields */
        input[type=text] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit button */
        .loginbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .loginbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signup {
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>
</head>
<body>

<form action="login" method="post">
    <div class="container">
        <h1>Login</h1>
        <p>Please fill in this form to login.</p>
        <hr>

        <label for="email"><b>Email address*</b></label>
        <input type="email" placeholder="Enter e-mail" name="email" required>

        <label for="password"><b>Password*</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <label for="password"><b>Remember me</b></label>
        <input type="checkbox" name="remember_me" value="remember_me">

        <button type="submit" class="loginbtn">Login</button>
    </div>

    <div class="container signup">
        <p>Don't have an account? <a href="registerView">Sign up</a>.</p>
        <p>Lost your password? <a href="requestResetView">Reset password</a>.</p>
    </div>
</form>

</body>
</html>
