<div class="form_container">
    <!-- Login From -->
    <div class="form login_form">
        <form action="../Main/index.php?fgPw" method="post">
            <h2>Forgot Your Password?</h2>

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

            <button class="button" name="btn_forget_Ps" type="submit">Submit</button>
        </form>
    </div>
</div>