<!--  -->
<img src="<?= $CONTENT_URL; ?>/Images/customer/<?= isset($_SESSION['user']) ? $_SESSION['user']['img_customer'] : "user.png" ?>" class="user-pic" onclick="toggleMenu()">
<div class="sub-menu-wrap" id="subMenu">
    <div class="sub-menu">
        <div class="user-infor">
            <img src="<?= $CONTENT_URL; ?>/Images/customer/<?= isset($_SESSION['user']['img_customer']) ? $_SESSION['user']['img_customer'] : "user.png" ?>" alt="">
            <h3><?= isset($_SESSION['user']['name_customer']) ? $_SESSION['user']['name_customer'] : "" ?> </h3>
        </div>
        <hr>

        <?php
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['role'] === "boss") {
                echo
                '<a href="http://localhost/BOX_PHP/DUNE/Admin/admin/" class="sub-menu-link">
                <p>Admin</p>
                <span>></span>
                </a>';
            }
        }
        ?>


        <?php
        if (isset($_SESSION['user'])) {
            echo '<a href="../Main/index.php?changePs" class="sub-menu-link">
            <a href="../Main/index.php?his_cart" class="sub-menu-link">
            <p>My Order</p>
            <span>></span>
            </a>
            
            <p>Change Password
            </p>
            <span>></span>
            </a>
            
           ';
        }
        ?>

        <a href="../Main/index.php?login" class="sub-menu-link">
            <p>Log in </p>
            <span>></span>
        </a>
        <?php
        if (isset($_SESSION['user'])) {
            echo '<a href="../Main/index.php?logout" class="sub-menu-link">
            <p>Log out</p>
            <span>></span>
            </a>';
        }
        ?>

    </div>
</div>