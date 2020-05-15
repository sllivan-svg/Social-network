<?php

include_once URL_APP.'/views/custom/header.php';

?>

<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">

                <div class="login100-form validate-form">
                <form action="<?php echo URL_PROJECT ?>/home/register" method="POST">
                    <span class="login100-form-title">
                        Member Register
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid user is required">
                        <input class="input100" type="text" name="usuario" placeholder="Username" require>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="email" name="correo" placeholder="Email" require>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="contrasena" placeholder="Password" require>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Register
                        </button>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="<?php echo URL_PROJECT?>/home/login">
                            Login Now
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                    </form>
                </div>

                <div class="login100-pic js-tilt" data-tilt>
                    <a href="<?php echo URL_PROJECT?>/home/login"><img src="<?php echo URL_PROJECT?>/img/logo.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>


<?php

include_once URL_APP.'/views/custom/footer.php';

?>