<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f8f8;
        margin: 0;
        padding: 0;
    }

    .Box {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        margin: 20px;
    }

    .product-image {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .product-description {
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .product-description h2 {
        margin-top: 0;
    }

    .product-description p {
        margin-bottom: 10px;
        line-height: 1.5;
        color: hsl(206, 16%, 10%);
        font-family: var(--body-font);
    }

    .select-container {
        margin-bottom: 20px;
        display: inline-block;
        margin-right: 20px;
        /* Adjust the margin as needed */
    }

    .select-container label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .select-container select {
        margin-right: 2rem;
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .review-box {
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .review-box h3 {
        margin-top: 0;
    }

    .review-textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .star-rating {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .star-rating input {
        display: none;
    }

    .star-rating label {
        font-size: 24px;
        color: #ccc;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .star-rating input:checked~label {
        color: #ffc107;
    }

    .submit-button {
        background-color: #000;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .submit-button:hover {
        background-color: #333;
    }

    .button-27 {
        background-color: #000000;
        border: 2px solid #1A1A1A;
        border-radius: 15px;
        box-sizing: border-box;
        color: #FFFFFF;
        cursor: pointer;
        display: inline-block;
        font-size: 16px;
        font-weight: 600;
        line-height: normal;
        margin: 0;
        outline: none;
        padding: 20px 40px;
        text-align: center;
        text-decoration: none;
        transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        will-change: transform;
    }

    .button-27:disabled {
        pointer-events: none;
    }

    .button-27:hover {
        box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
        transform: translateY(-2px);
    }

    .button-27:active {
        box-shadow: none;
        transform: translateY(0);
    }
</style>

<div class="detail title-product container">

    <div class="Box">
        <!-- Grid 1: Product Image -->
        <div>
            <img src="../../Content/Images/product/<?= $img_product ?>" alt="" class="product-image">
        </div>

        <!-- Grid2: Description and Review Box -->
        <div>
            <div class="product-description">
                <h2 style="color:#000000"><?= $name_product ?></h2>
                <b>
                    <h3 style="margin:1rem 0;color:hsl(199, 28%, 17%)">$<?= $price ?></h3>
                </b>
                <p>
                    You already know they're crisp and clean. Their upper is made from leather and textiles, and they have that iconic Nike Air comfort in the sole. They're gonna go with any outfit—so what's it gonna be?
                    <br>
                    Colour Shown: White/Lobster/Sail/Dune Red <br>
                    Style: FJ3459-160
                </p>

                <div class="select-container">
                    <label for="size">Size:</label>
                    <select id="size">
                        <?php

                        foreach ($size as $sz) {
                            extract($sz);
                            $selected = $sz['id_size'] == $id_size ? 'selected' : '';
                            echo '
                            <option value="' . $sz['id_size'] . '" ' . $selected . '>' . $sz['name_size'] . '</option>

                            ';
                        }
                        ?>
                    </select>
                </div>
                <div class="select-container">
                    <label for="color">Color:</label>
                    <select id="color">
                        <?php
                        foreach ($color as $cl) {
                            extract($cl);
                            $selected = $cl['id_color'] == $products['id_color'] ? 'selected' : '';
                            echo '
                            <option value="' . $cl['id_color'] . '" ' . $selected . '>' . $cl['name_color'] . '</option>


                            ';
                        }
                        ?>

                    </select>
                </div>
                <div class="select-container">
                    <button class="button-27" role="button">Add To Cart</button>
                </div>
            </div>


            <div class="review-box">
                <h3>Customer Reviews</h3>
                <div class="review">
                    <h4>Leave Your Review</h4>
                    <div class="star-rating">
                        <input type="radio" id="star5" name="rating" value="5">
                        <label for="star5">&#9733;</label>
                        <input type="radio" id="star4" name="rating" value="4">
                        <label for="star4">&#9733;</label>
                        <input type="radio" id="star3" name="rating" value="3">
                        <label for="star3">&#9733;</label>
                        <input type="radio" id="star2" name="rating" value="2">
                        <label for="star2">&#9733;</label>
                        <input type="radio" id="star1" name="rating" value="1">
                        <label for="star1">&#9733;</label>
                    </div>
                    <textarea id="reviewText" rows="1" cols="50" class="review-textarea" placeholder="Write your review here" disabled><?= $description ?></textarea>

                    <?php
                    if (isset($_SESSION['user'])) {
                    ?>
                        <form action="detail.php?id_product=<?= $id_product ?>" id="form-send" method="post">
                            <textarea id="reviewText" rows="4" cols="50" class="review-textarea" placeholder="Write your review here"></textarea>
                            <button class="submit-button">Submit Review</button>
                            <input type="hidden" name="id_product" value="<?= $_GET['id_product'] ?>">
                        </form>
                    <?php
                    }
                    ?>


                </div>
            </div>
        </div>


    </div>

</div>