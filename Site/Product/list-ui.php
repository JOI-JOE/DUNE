<!--  -->
<div class="title-product">
    <!-- DATE -->
    <span>Date: </span>
    <select>
        <option value="">2024</option>
    </select>
    <!-- Type -->
    <span>Type: </span>
    <select>
        <?php
        foreach ($list_Commodity as $type) {
            extract($type);
            echo '<option value=' . $id_commodity . '>' . $name_commodity . '</option>';
        }
        ?>
    </select>
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
                                    <a href=""><i class="bx bx-movie-play"></i></a>
                                    <a href="#"><i class="bx bxs-shopping-bag"></i></a>
                                </p>
                            </div>
                        </div>
                        <!-- detail-box -->
                        <div class="detail-box">
                            <div class="type">
                                <a href="detail.php?id_product=' . $id_product . '">' . $name_product . '</a>
                                <span>' . number_format($sale_product * 100) . '%</span>
                            </div>
                            <!-- price -->
                            <a href="detail.php?id_product=' . $id_product . '" class="price">$' . number_format($price_product, 2)  . '</a>
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