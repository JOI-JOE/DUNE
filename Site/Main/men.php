<style>
    ul {
        list-style: none;
    }

    .side-nav-categories {
        background-color: #fff;
        border-width: 1px;
        border-style: solid;
        border-color: #f5f5f5 #eee #d5d5d5 #eee;
        box-shadow: 0 5px 0 rgba(200, 200, 200, .2);
        margin-bottom: 30px;
        width: 350px;
        top: 100px;
    }

    .title {
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 0px;
        padding: 12px 25px 10px 25px;
        position: relative;
        display: inline-block;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        background: hsl(206, 16%, 10%);
        margin-top: 0px;
        margin-left: -10px;
    }

    .title:after {
        content: "";
        height: 1px;
        width: 1px;
        border-style: solid;
        border-width: 5px;
        position: absolute;
        bottom: -10px;
        left: 0;
        border-color: hsl(206, 16%, 10%) hsl(206, 16%, 10%) transparent transparent;
    }

    ul#category-tabs {
        list-style: none;
        padding: 0;
        margin: 0;
        padding: 0;
    }

    ul#category-tabs h1 {
        font-family: var(--second-font);
        font-size: 20px;
        letter-spacing: 4px;
        color: black;
    }

    ul#category-tabs li {
        display: block;
        position: relative;
        margin: 0;
        border-bottom: 1px #ececec solid;
        padding: 10px 18px;
    }

    ul.sub-category-tabs li {
        padding: 2px !important;
    }

    ul.sub-category-tabs li {
        border-bottom: 0px !important;
    }

    ul#category-tabs li a {
        color: hsl(193, 20%, 30%);
        font-weight: 700;
        margin-bottom: 0;
        font-size: 13px;
    }

    ul#category-tabs li a i {
        top: 12px;
        right: 18px;
        position: absolute;
        cursor: pointer;
        width: 16px;
        height: 16px;
        padding: 2px;
        color: #ed6663;
    }

    .catergory-product {
        display: flex;
    }

    .box-card {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 1rem;
    }
</style>
<div class="container">
    <div class="box catergory-product">
        <div class="side-nav-categories">
            <div class="title"><strong style="font-family: var(--second-font);">MEN'S CLOTHING</strong></div>
            <ul id="category-tabs">
                <li><a href="#" class="main-category">
                        <h1>Catergory</h1>
                        <i class='bx bx-minus'></i>
                    </a>
                    <ul class="sub-category-tabs">
                        <?php
                        foreach ($list_cate as $lc) {
                            extract($lc);
                            echo '
                        <li><a href="../Main/index.php?men=id_catergory=' . $id_catergory . '">' . $name_catergory . '</a></li>
                        ';
                        }
                        ?>
                    </ul>
                </li>
            </ul>
            <ul id="category-tabs">
                <li><a href="#" class="main-category">
                        <h1>SPORT</h1>
                        <i class='bx bx-minus'></i>
                    </a>
                    <ul class="sub-category-tabs">
                        <?php
                        foreach ($list_sport as $ls) {
                            extract($ls);
                            echo '
                        <li><a href="../Main/index.php?men=id_sport=' . $id_sport . '">' . $name_sport . '</a></li>
                        ';
                        }
                        ?>
                    </ul>
                </li>
            </ul>
            <ul id="category-tabs">
                <li><a href="#" class="main-category">
                        <h1>COLOR</h1>
                        <i class='bx bx-minus'></i>
                    </a>
                    <ul class="sub-category-tabs">
                        <?php
                        foreach ($list_color as $lc) {
                            extract($lc);
                            echo '
                        <li><a href="../Main/index.php?men=id_color=' . $id_color . '">' . $name_color . '</a></li>
                        ';
                        }
                        ?>
                    </ul>
                </li>
            </ul>
            <ul id="category-tabs">
                <li><a href="#" class="main-category">
                        <h1>SIZE</h1><i class='bx bx-minus'></i>
                    </a>
                    <ul class="sub-category-tabs">
                        <?php
                        foreach ($list_size as $ls) {
                            extract($ls);
                            echo '
                        <li><a href="../Main/index.php?men=id_size=' . $id_size . '">' . $name_size . '</a></li>
                        ';
                        }
                        ?>
                    </ul>
                </li>
            </ul>
            <ul id="category-tabs">
                <li><a href="#" class="main-category">
                        <h1>BRAND</h1><i class='bx bx-minus'></i></i>
                    </a>
                    <ul class="sub-category-tabs">
                        <?php
                        foreach ($list_brand as $lb) {
                            extract($lb);
                            echo '
                        <li><a href="../Main/index.php?men=id_brand=' . $id_brand . '">' . $name_brand . '</a></li>
                        ';
                        }
                        ?>

                    </ul>
                </li>
            </ul>
        </div>
        <div class="product-by-menu">
            <div class="swiper-wrapper box-card">
                <?php
                foreach ($list_product as $tr) {
                    extract($tr);
                    echo '<div class="card">
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
                                <span>' . $sale . '%</span>
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
        </div>
    </div>
</div>