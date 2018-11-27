<?php
/**
 * Created by PhpStorm.
 * User: Nishen Peiris
 * Date: 11/22/18
 * Time: 13:21
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/header/header_links.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/header/header.php';
?>

    <section class="user-reg-sec">
        <div class="container">
            <div class="col-sm-7 col-sm-push-3 activate-wrp">
                <form action="../User_controller/resetPassword" class="active-form" method="post">
                    <h1>Password Reset</h1>
                    <p>Please fill in this form to reset your password.</p>
                    <div class="input-wrp">
                        <label for="key"><b>Password reset key*</b></label>
                        <input type="text" name="key" required>
                    </div>
                    <div class="input-wrp">
                        <label for="password"><b>Password*</b></label>
                        <input type="password" name="password" required>
                    </div>
                    <div class="input-wrp">
                        <label for="repeat_password"><b>Repeat password*</b></label>
                        <input type="password" name="repeat_password" required>
                    </div>
                    <button type="submit" class="resetbtn input-btn">Reset</button>
                </form>
            </div>
        </div>
    </section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/footer/footer_links.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/footer/footer.php';
?>