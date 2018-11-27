<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nishen Peiris
 * Date: 11/15/18
 * Time: 9:29 PM
 */
?>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/header/header_links.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/header/header.php';
?>
<section class="user-reg-sec">
    <div class="container reg-header">
        <h1>Let's start the Journey</h1>
    </div>
    <div class="container reg-container">
        <div class="col-sm-6 social-sign">
            <h4 class="middle">Use a Social Account for faster Registration</h4>

            <button class="input-btn blue"><i class="fa fa-facebook-square"></i> Log in with Facebook</button>
            <button class="input-btn google"><i class="fa fa-google "></i> Log in with Google</button>
            <button class="input-btn twitter"><i class="fa fa-twitter "></i> Log in with Twitter</button>
            <button class="input-btn red"><i class="fa fa-instagram "></i> Log in with Instagram</button>

            <p class="middle">By creating an account you agree to our <a href="#">Terms & Privacy</a></p>
            <p class="middle">Already have an account? <a href="loginView">Sign in</a></p>

        </div>
        <div class="col-sm-6 register-form">
            <h4 class="middle">Enter your details to Create a New Account</h4>
            <form action="../User_controller/register" method="post">
                <div class="row">

                    <div class="col-sm-6">
                        <div class="input-wrp">
                            <label for="first_name">First name*</label>
                            <input type="text" name="first_name" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-wrp">
                            <label for="last_name">Last name*</label>
                            <input type="text" name="last_name" required>
                        </div>
                    </div>
                </div>
                <div class="input-wrp">
                    <label for="email">Email address*</label>
                    <input type="email" name="email" required>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-wrp">
                            <label for="password">Password*</label>
                            <input type="password" name="password" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-wrp">
                            <label for="repeat_password">Confirm password*</label>
                            <input type="password" name="repeat_password" required>
                        </div>
                    </div>
                </div>

                <button type="submit" class="registerbtn input-btn">Register</button>
            </form>
        </div>
    </div>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/footer/footer_links.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/footer/footer.php';
?>





