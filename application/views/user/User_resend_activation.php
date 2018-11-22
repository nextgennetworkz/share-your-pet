<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nishen Peiris
 * Date: 11/20/18
 * Time: 16:34
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
        .resendbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .resendbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .activate {
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>
</head>
<body>

<form action="resendActivation" method="post">
    <div class="container">
        <h1>Resend activation code</h1>
        <p>Please fill in this form to resend your activation code.</p>
        <hr>

        <label for="email"><b>email*</b></label>
        <input type="email" placeholder="Enter email" name="email" required>

        <button type="submit" class="resendbtn">Resend</button>
    </div>

    <div class="container activate">
        <p>Activation your account? <a href="activateView">Activate your account</a>.</p>
    </div>
</form>

</body>
</html>