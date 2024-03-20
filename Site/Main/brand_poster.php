    <aside class="main_aside">
        <div class="sidebar">
            <?php
            foreach ($list_brand as $brand) {
                extract($brand);
                $link = "../Main/index.php?id_brand=$id_brand";
                echo '
                <a href="' . $link . '">
                <span><img src="../../Content/Images/icon/' . $name_brand . '.png" alt=""></span>
                <h4>' . $name_brand . '</h4>
                </a>
                ';
            }
            ?>

        </div>
    </aside>

    <section class="main_section">

        <div class="poster">
            <img src="../../Content/Images/poster/poster_2.jpg" alt="">

        </div>
    </section>
    <script>

    </script>