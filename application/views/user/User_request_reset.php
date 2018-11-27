<?php
/**
 * Created by PhpStorm.
 * User: Nishen Peiris
 * Date: 11/22/18
 * Time: 10:52
 */
?>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/header/header_links.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/header/header.php';
?>
<section class="user-reg-sec">
    <div class="container">
        <div class="col-sm-7 col-sm-push-3 activate-wrp">
            <form action="../User_controller/requestReset" class="active-form" method="post">
                <h1>Send Password Reset Link</h1>
                <p>Please fill in this form to receive password reset link.</p>
                <div class="input-wrp">
                    <label for="email"><b>Email address*</b></label>
                    <input type="email"  name="email" required>

                </div>
                <button type="submit" class="sendbtn input-btn">Send password reset link</button>
            </form>
        </div>
    </div>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/footer/footer_links.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/footer/footer.php';
?>
