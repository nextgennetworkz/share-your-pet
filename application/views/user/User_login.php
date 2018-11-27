<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nishen Peiris
 * Date: 11/17/18
 * Time: 6:30 AM
 */
?>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/header/header_links.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/header/header.php';
?>
    <section>
        <div class="col-sm-6 login-back">
            <div id="ninja-slider">
                <div class="slider-inner">
                    <ul>
                        <li>
                            <a class="ns-img img-responsive" href="/share-your-pet/assets/images/login-back.jpg"></a>
                        </li>
                        <li>
                            <a class="ns-img img-responsive"
                               href="/share-your-pet/assets/images/0fbf8c7d5c732fdd9a36497a1562f903.jpg"></a>
                        </li>
                    </ul>
                    <div class="navsWrapper">
                        <div id="ninja-slider-prev"></div>
                        <div id="ninja-slider-next"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 login-wrp">
            <div class="login-main">
                <div class="login-header">
                    <h1>Login to Your Account</h1>
                </div>
                <div class="login-form">
                    <div class="img-wrp">
                        <img src="/share-your-pet/assets/images/chathu.jpg" class="img-circle img-responsive">
                    </div>
                    <form action="login" method="post">
                        <div class="input-wrp">
                            <i class="fa fa-envelope"></i><input type="email" placeholder="Enter Your E-mail"
                                                                 name="email" required>
                        </div>
                        <div class="input-wrp">
                            <i class="fa fa-lock"></i><input type="password" placeholder="Enter Your Password"
                                                             name="password" required>
                        </div>

                        <label for="password">Remember me</label>
                        <input type="checkbox" name="remember_me" value="remember_me" class="my-checkbox"><br>

                        <button type="submit" class="loginbtn input-btn">Login</button>

                        <p>Don't have an account? <a href="register">Sign up</a></p>
                        <p>Lost your password? <a href="request-password-reset">Reset password</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/footer/footer_links.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/views/layout/footer/footer.php';
?>