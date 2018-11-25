<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nishen Peiris
 * Date: 11/17/18
 * Time: 6:31 AM
 */
?>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/header/header_links.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/header/header.php';
?>

<form action="../User_controller/activate" method="post">
    <div class="container">
        <h1>Activate</h1>
        <p>Please fill in this form to activate your account.</p>
        <hr>

        <label for="activation_token"><b>Activation key*</b></label>
        <input type="text" placeholder="Enter activation key" name="activation_token" required>

        <button type="submit" class="activatebtn">Activate</button>
    </div>

    <div class="container signup">
        <p>Resend activation code? <a href="resend-activation-code">Resend activation code</a>.</p>
    </div>
</form>

</body>
</html>