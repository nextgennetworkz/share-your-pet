<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nishen Peiris
 * Date: 11/17/18
 * Time: 6:31 AM
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/header/header_links.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/header/header.php';
?>

    <section class="user-reg-sec">
        <div class="container">
            <div class="col-sm-7 col-sm-push-3 activate-wrp">
                <form action="../User_controller/activate" class="active-form" method="post">
                    <h1>Activate Your Account</h1>
                    <p>An email with the activation code has been sent to your inbox. Please check your inbox.</p>
                    <div class="input-wrp">
                        <label for="activation_token">Activation key*</label>
                        <input type="text" name="activation_token" required>
                    </div>

                    <button type="submit" class="activatebtn input-btn">Activate</button>
                    <p>Resend activation code? <a href="resend-activation-code">Click here to resend</a></p>
                </form>
            </div>
        </div>
    </section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/footer/footer_links.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/footer/footer.php';
?>