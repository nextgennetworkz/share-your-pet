<form action="../User_controller/register" method="post">
    <div class="container">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="first_name"><b>First name*</b></label>
        <input type="text" placeholder="Enter First name" name="first_name" required>

        <label for="last_name"><b>Last name*</b></label>
        <input type="text" placeholder="Enter Last name" name="last_name" required>

        <label for="email"><b>Email address*</b></label>
        <input type="email" placeholder="Enter e-mail" name="email" required>

        <label for="password"><b>Password*</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <label for="repeat_password"><b>Re-password*</b></label>
        <input type="password" placeholder="Enter Re-assword" name="repeat_password" required>

        <label for="biography"><b>Biography</b></label>
        <input type="text" placeholder="Enter biography" name="biography" required>
        <hr>
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

        <button type="submit" class="registerbtn">Register</button>
    </div>

    <div class="container signin">
        <p>Already have an account? <a href="loginView">Sign in</a>.</p>
    </div>
</form>

</body>
</html>

