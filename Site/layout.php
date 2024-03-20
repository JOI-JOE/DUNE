<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- =================================== BOXICON ======================================== -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- =================================== UNICONS ======================================== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <!-- =================================== SWIPER ======================================== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- =================================== CSS ======================================== -->
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/Css/style_main.css" />

    <title>Dune</title>

    <link rel="icon" href="<?= $CONTENT_URL; ?>/Images/icon/jordan.png">

</head>

<body>
    <!-- =================================== HEADER ======================================== -->
    <header class="header" id="header">
        <div class="dune">
            <ul class="container">
                <li><img src="<?= $CONTENT_URL; ?>/Images/icon/jordan.png" /></li>
            </ul>
        </div>
        <nav class="nav container">
            <a href="../Main/index.php" class="nav__logo">

                <h1>DUNE</h1>
            </a>



            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="../Main/index.php?new" class="nav__link">New & Feature</a>
                    </li>

                    <li class="nav__item">
                        <a href="../Main/index.php?men" class="nav__link">Men</a>
                    </li>

                    <li class="nav__item">
                        <a href="../Main/index.php?sale" class="nav__link">Sale</a>
                    </li>
                </ul>
            </div>


            <form method="GET" action="../Main/index.php">
                <div class="form-input">
                    <input type="search" name="search" placeholder="Search..." />
                    <button class="search-btn" type="submit">
                        <i class="bx bx-search"></i>
                    </button>
                </div>
            </form>


            <div class="shopping-bag">
                <a href="../Main/index.php?cart"><i class=" bx bx-shopping-bag bag-icon"></i></a>
                <?php
                if (is_array($number)) {
                    foreach ($number as $nu) {
                        echo '<span>' . $nu['number_cart'] . '</span>';
                    }
                } else {
                    echo '<span>0</span>';
                }
                ?>
            </div>

            <?php
            require "Main/login.php";
            ?>

        </nav>
    </header>
    <!-- =================================== END HEADER ======================================== -->

    <!-- =================================== MAIN ======================================== -->

    <?php include $VIEW_NAME ?>

    <!-- =================================== END MAIN ======================================== -->

    <!-- -------------------------------------------------- -->
    <?php require "Main/footer.php" ?>
    <script>
        // -------------------------- PROFILE BUTTON -----------------------------
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>
    <script src="<?= $CONTENT_URL ?>/Js/app.js"></script>
</body>

</html>