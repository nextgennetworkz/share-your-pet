<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nishen Peiris
 * Date: 11/17/18
 * Time: 6:31 AM
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
        .activatebtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .activatebtn:hover {
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

<form action="activate" method="post">
    <div class="container">
        <h1>Activate</h1>
        <p>Please fill in this form to activate your account.</p>
        <hr>

        <label for="activation_token"><b>Activation key*</b></label>
        <input type="text" placeholder="Enter activation key" name="activation_token" required>

        <button type="submit" class="activatebtn">Activate</button>
    </div>

    <div class="container signup">
        <p>Resend activation code? <a href="resendActivationView">Resend activation code</a>.</p>
    </div>
</form>

</body>
</html>