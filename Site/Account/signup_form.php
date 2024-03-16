<div class="form_container">
    <!-- Login From -->
    <div class="form signup_form">
        <div class="title">Registration</div>

        <form action="../Account/signup.php" method="post" enctype="multipart/form-data" onsubmit="return validation()">

            <!-- input alert -->

            <?php
            if (isset($MESSAGE)) {
                $alert = ($MESSAGE === 'Successfully Registered') ? "success" : "error";
                echo '<div class="input_alert ' . $alert . '">
                    <span>' . $MESSAGE . '</span>
                    </div>';
            }

            ?>


            <div class="content">
                <div class="user-details">

                    <!-- INPUT FULL NAME -->
                    <div class="input-box">
                        <span class="details">Name</span>
                        <input type="text" name="name_client" placeholder="Enter your name" class="name-cus" autocomplete="off">
                    </div>

                    <!-- INPUT EMAIL -->
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="email_client" placeholder="Enter your email" class="email-cus" autocomplete="off">
                    </div>

                    <!-- INPUT PASSWORD -->
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="password" placeholder="Enter your password" class="password-cus" autocomplete="off">
                    </div>

                    <!-- INPUT CONFIRM PASSWORD -->
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" name="confirmPassword" placeholder="Confirm your password" class="confirm-cus" autocomplete="off">
                    </div>
                </div>

                <!-- INPUT IMG CLIENT -->
                <div class="input-box">
                    <span class="details">Image</span>
                    <div class="input_file">
                        <input type="file" id="file" name="img_client" accept="image/*" hidden autocomplete="off">
                        <div class="img-area" data-img="">
                            <h3>Upload Image</h3>
                            <p>Image size must be less than <span>2MB</span></p>
                        </div>
                        <input type="button" class="select-image" value="Submit" />
                    </div>
                </div>

                <button class="button" name="register" type="submit" autocomplete="off">Register</button>
                <div class="login_signup">Already have an account? <a href="../Main/index.php?login" id="login">Log In</a></div>
            </div>

            <input type="hidden" name="role" value="client">
            <input type="hidden" name="active" value="0">
        </form>
    </div>
</div>
<script src="<?= $CONTENT_URL ?>/JS/app.js"></script>