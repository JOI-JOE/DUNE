<style>
    #autoWidth {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 10px;
    }

    .card {
        padding: 20px;
    }
</style>
<div class="title-product">

</div>
<div class="main_product container">

    <ul id="autoWidth" class="container">
        <!-- 1--------------------------------------------- -->
        <?php
        foreach ($products as $product) {
            extract($product);
            // $link = "list.php?id_commodity=$id_commodity";
            echo '
            <li class="item-a">
            <!-- box-slider -->
            <div class="card swiper-slide">
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
                                <a href="detail.php?id_product=' . $id_product . '">' . $name_product . '</a>
                                <span>' . $sale . '%</span>
                            </div>
                            <!-- price -->
                            <a href="detail.php?id_product=' . $id_product . '" class="price">$' . number_format($price, 2)  . '</a>
                        </div>
                    </div>
                </div>
        </li>
      ';
        }
        ?>
        <!-- 1--------------------------------------------- -->
    </ul>
</div>