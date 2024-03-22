<div class="form_container">
    <!-- Login From -->
    <div class="form signup_form">
        <div class="title">Change Password</div>

        <form action="../Main/index.php?changePs" method="post" enctype="multipart/form-data">

            <!-- input alert -->
            <?php
            if (isset($MESSAGE)) {
                $alert = ($MESSAGE === 'Change password successfully') ? "success" : "error";
                echo '<div class="input_alert ' . $alert . '">
                    <span>' . $MESSAGE . '</span>
                    </div>';
            }
            ?>


            <div class="content">
                <div class="user-details">

                    <!-- INPUT FULL NAME -->
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="email" placeholder="Enter your email">
                    </div>

                    <!-- INPUT EMAIL -->
                    <div class="input-box">
                        <span class="details">Old password</span>
                        <input type="text" name="old_password" placeholder="Enter your old password">
                    </div>

                    <!-- INPUT PASSWORD -->
                    <div class="input-box">
                        <span class="details">New password</span>
                        <input type="text" name="new_password" placeholder="Enter your new password">
                    </div>

                    <!-- INPUT CONFIRM PASSWORD -->
                    <div class="input-box">
                        <span class="details">Confirm new password</span>
                        <input type="text" name="confirm_new_password" placeholder="Confirm your password">
                    </div>
                </div>

                <button class="button" name="btn_changePs" type="submit">Change</button>
                <div class="login_signup">Already have an account? <a href="../Main/index.php?login" id="login">Log In</a></div>
            </div>
        </form>
    </div>
</div>