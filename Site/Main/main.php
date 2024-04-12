<div class="section container">
    <!-- ============================ Commercial ============================ -->
    <div class="section_1 space-container">
        <!-- ---------------- Introduce ---------------- -->
        <div class="title_introduction " style="text-align:center">
            <h3> Move, Shop, Customise & Celebrate With Us.</h3>
            <span>
                No matter what you feel like doing today, It’s better as a Member.
            </span>
            <br>
            <a href="../Main/index.php?signup" style="text-decoration:underline;color: black">Join Us</a>
        </div>

        <!-- ---------------- Video ---------------- -->
        <div class="commercial_dune">
            <video class="container" autoplay loop muted controls="false">
                <source src="<?= $CONTENT_URL; ?>/Images/poster/commercial_dune.mp4" type="video/mp4">
            </video>
        </div>

        <!-- ---------------- Title ---------------- -->
        <div class="commercial_title ">
            <h1 class="font-container">TODAY JUST GOT EASIER</h1>
            <p>Find You Passion</p>
            <button class="button-shop"><a href="../Main/index.php?men">Shop</a></button>
        </div>
    </div>



    <!-- ============================ Select Product By Sport ============================ -->
    <div class="section_2 space-container">
        <!-- ---------------- Title ---------------- -->
        <h1 class="title-main">Shop By Sport</h1>

        <!-- ---------------- Sport Product ---------------- -->
        <div class="selection_sport">
            <ul class="sport">
                <?php
                foreach ($list_sport as $sport) {
                    extract($sport);
                    $link = "../Main/index.php?men=id_sport=$id_sport";
                    echo '
                        <li><a href="' . $link . '"><img src="../../Content/Images/poster/' . $name_sport . '.webp" alt=""></a>
                        <span class="sub_title">' . $name_sport . '</span>
                        </li>
                        ';
                }
                ?>
            </ul>
        </div>
    </div>



    <!-- ============================ Select Product By Sport ============================ -->
    <div class="section_3 space-container">
        <!-- ---------------- Title ---------------- -->
        <h1 class="title-main">Always Iconic</h1>

        <!-- ---------------- Iconic Product ---------------- -->
        <div class="selection_iconic">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($list_iconic as $tr) {
                        extract($tr);
                        echo '<div class="card swiper-slide">
                <a href="../Product/detail.php?id_product=' . $id_product . '">
                    <div class="box_P">
                        <!-- img -->
                        <div class="slide-img">
                            <img src="../../Content/Images/product/' . $img_product . '" alt="" />
                            <!-- overlay -->
                            <div class="overlay">
                                <p href="#" class="buy-btn">
                                    <a href="#"></a>
                                    <a href="#"></a>
                                </p>
                            </div>
                        </div>
                        <!-- detail-box -->
                        <div class="detail-box">
                            <div class="type">
                            <a href="../Main/index.php?id_product=' . $id_product . '">' . $name_product . '</a>
                                <span></span>
                            </div>
                            <!-- price -->
                            <a href="#" class="price">$' . $price . '</a>
                        </div>
                    </div>
                </a>
            </div>';
                    }
                    ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        autoplay: true,
        autoplayDisableOnInteraction: true,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>