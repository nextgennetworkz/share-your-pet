<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nishen Peiris
 * Date: 11/17/18
 * Time: 6:30 AM
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
        .updatebtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .updatebtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }
    </style>
</head>
<body>

<form action="../User_controller/update" method="post">
    <div class="container">
        <h1>Account details</h1>
        <hr>

        <label for="first_name"><b>First name *</b></label>
        <input type="text" placeholder="Enter first name" name="first_name" required
               value="<?php echo $user->first_name; ?>">

        <label for="last_name"><b>Last name *</b></label>
        <input type="text" placeholder="Enter last name" name="last_name" required
               value="<?php echo $user->last_name; ?>">

        <label for="biography"><b>Biography</b></label>
        <input type="text" placeholder="Enter biography" name="biography" value="<?php echo $user->biography; ?>">

        <button type="submit" class="updatebtn">Update</button>
    </div>
</form>

</body>
</html>
