<?php
/**
 * Created by PhpStorm.
 * User: Nishen Peiris
 * Date: 11/22/18
 * Time: 10:52
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
        input[type=text], input[type=password], input[type=email] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus, input[type=email]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit button */
        .sendbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .sendbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }
    </style>
</head>
<body>

<form action="../User_controller/requestReset" method="post">
    <div class="container">
        <h1>Send password reset link</h1>
        <p>Please fill in this form to receive password reset link.</p>
        <hr>

        <label for="email"><b>Email address*</b></label>
        <input type="email" placeholder="Enter e-mail" name="email" required>

        <button type="submit" class="sendbtn">Send password reset link</button>
    </div>
</form>

</body>
</html>

