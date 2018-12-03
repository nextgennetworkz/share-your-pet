<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nishen Peiris
 * Date: 11/28/18
 * Time: 7:26 AM
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
        input[type=text], input[type=password], input[type=file], select, textarea {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus, input[type=file]:focus, select:focus, textarea:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit button */
        .addbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .addbtn:hover {
            opacity: 1;
        }
    </style>
</head>
<body>

<form action="../Pets_and_owners_listing_controller/add" method="post">
    <div class="container">
        <h1>Share your pet</h1>
        <hr>

        <label for="pet"><b>Select Your Pet *</b></label>
        <select name="pet_id" required>
            <?php
            foreach ($pets as $pet) {
                ?>
                <option value="<?php echo $pet->id; ?>"><?php echo $pet->name; ?></option>
                <?php
            }
            ?>
        </select>

        <label for="cover_image"><b>Add a cover image</b></label>
        <input type="file" name="cover_image">

        <label for="pet_name"><b>Name of your pet *</b></label>
        <input type="text" placeholder="Enter name of your pet" name="pet_name" required>

        <label for="description"><b>Tell people about your pet *</b></label>
        <textarea name="description" required></textarea>

        <label for="location"><b>Precise location *</b></label>
        <input type="text" placeholder="Enter location" name="location" required>

        <label for="reason"><b>Reason</b></label>
        <input type="text" placeholder="Enter reason for sharing your pet" name="reason">

        <label for="sex"><b>Sex</b></label><br>
        <?php
        foreach ($sexes as $sex) {
            ?>
            <input type="radio" name="sex_id" value="<?php echo $sex->id; ?>"><?php echo $sex->sex; ?><br>
            <?php
        }
        ?>
        <br>

        <label for="size"><b>Size</b></label><br>
        <?php
        foreach ($sizes as $size) {
            ?>
            <input type="radio" name="size_id" value="<?php echo $size->id; ?>"><?php echo $size->size; ?><br>
            <?php
        }
        ?>
        <br>

        <label for="age"><b>Age</b></label><br>
        <?php
        foreach ($ages as $age) {
            ?>
            <input type="radio" name="age_id" value="<?php echo $age->id; ?>"><?php echo $age->age; ?><br>
            <?php
        }
        ?>
        <br>

        <label for="images"><b>Upload all your images</b></label>
        <input type="file" name="images" multiple>

        <label for="contact"><b>Contact number</b></label>
        <input type="text" placeholder="Enter your contact number" name="contact">
        <hr>

        <button type="submit" class="addbtn">Add</button>
    </div>
</form>

</body>
</html>

