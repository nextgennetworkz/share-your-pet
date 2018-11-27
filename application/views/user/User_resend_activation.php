<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nishen Peiris
 * Date: 11/20/18
 * Time: 16:34
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/header/header_links.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/header/header.php';
?>

    <section class="user-reg-sec">
        <div class="container">
            <div class="col-sm-7 col-sm-push-3 activate-wrp">
                <form action="../User_controller/resendActivation" class="active-form" method="post">
                    <h1>Resend activation code</h1>
                    <p>Please enter your email address to resend activation code</p>
                    <div class="input-wrp">
                        <label for="email">Email*</label>
                        <input type="email" name="email" required>
                    </div>
                    <button type="submit" class="resendbtn input-btn">Resend</button>
                    <p>Activation your account? <a href="activate">Activate your account</a></p>
                </form>
            </div>
        </div>
    </section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/footer/footer_links.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/footer/footer.php';
?>