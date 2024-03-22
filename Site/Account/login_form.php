<div class="form_container">
    <!-- Login From -->
    <div class="form login_form">
        <form action="../Main/index.php?login" method="post">
            <h2>Login</h2>

            <!-- input alert -->
            <?php
            if (isset($MESSAGE)) {
                $alert = ($MESSAGE === 'Login successful') ? "success" : "error";
                echo '<div class="input_alert ' . $alert . '">
                    <span>' . $MESSAGE . '</span>
                    </div>';
            }
            ?>

            <!-- input email -->
            <div class="input_box">
                <input type="text" name="email" placeholder="Enter your email" />
                <i class="uil uil-envelope-alt email"></i>
            </div>

            <!-- input password -->
            <div class="input_box">
                <input type="password" name="password" placeholder="Enter your password" />
                <i class="uil uil-lock password"></i>
                <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <!-- checkbox -->
            <div class="option_field">
                <span class="checkbox">
                    <input type="checkbox" name="remember" id="check" checked />
                    <label for="check">Remember me</label>
                </span>

                <!-- forget password -->
                <a href="../Main/index.php?fgPw" class="forgot_pw">Forgot password?</a>
            </div>

            <button class="button" name="btn_login" type="submit">Login Now</button>

            <div class="login_signup">Don't have an account? <a href="../Main/index.php?signup" id="signup">Signup</a></div>
        </form>
    </div>
</div>
<script>
    pwShowHide = document.querySelectorAll(".pw_hide");
    pwShowHide.forEach((icon) => {
        icon.addEventListener("click", () => {
            let getPwInput = icon.parentElement.querySelector("input");
            if (getPwInput.type === "password") {
                getPwInput.type = "text";
                icon.classList.replace("uil-eye-slash", "uil-eye");
            } else {
                getPwInput.type = "password";
                icon.classList.replace("uil-eye", "uil-eye-slash");
            }
        });
    });
</script>