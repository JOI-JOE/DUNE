<div class="box container">
    <ul>

        <!-- <form action="../Main/index.php?ad_orI" method="post"> -->
        <!-- <form action="../Product/check_last_ui.php" method="post"> -->
        <?php
        $button
        ?>
        <form action="" method="POST">
            <?php
            foreach ($list_cart as $ls) {
                extract($ls);
            ?>
                <li>
                    <div class="checkout-items">
                        <div class="product" id="product_cart">
                            <img src="../../Content/Images/product/<?= $img_product ?>">
                            <div class="product-details">
                                <div class="product-title"><?= $name_product ?></div>
                                <div class="product-price">
                                    <span> $<?= $price ?></span>
                                </div>
                                <div class="quantity">
                                    <ul>
                                        <li>
                                            <span>Quantity: </span>
                                            <input type="number" class="number-input" name="quantities[]" min="1" value="1">
                                        </li>
                                        <li>
                                            <span>Size: </span>
                                            <?php
                                            foreach ($list_size as $ls) {
                                                if ($ls['id_size'] === $id_size) {
                                                    $isFirstMatch = true;

                                                    echo '<span>';
                                                    if ($isFirstMatch) {
                                                        echo $ls['name_size'];
                                                        $isFirstMatch = false;
                                                    }
                                                    echo '</span>';
                                                    break;
                                                }
                                            }
                                            ?>
                                        </li>

                                    </ul>
                                    <a href="../Main/index.php?del_cart=<?= $id_cart ?>">
                                        <span class="remove" name="remove">Remove</span>
                                    </a>
                                    <input type="hidden" name="id_cart" value="<?= $id_cart ?>">

                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php
            }
            ?>

    </ul>
    <div class="checkout-section">
        <h2>Total Price</h2>
        <p id="totalPrice" style="margin:2rem 0;">$0.00</p>

        <input type="submit" class="checkout-main" name="btn_checkout" <?= empty($id_cart) ? 'disabled  style="opacity:0.2 ;"' : "" ?> value="Buy Now">
        </form>

        <?php
        include_once "check_order.php";
        ?>

        <?php
        if (isset($_POST['btn_checkout'])) {
            echo '
            <div class="checkout-section" id="myButton" style="margin-top:20px;color:black;background:aquamarine;display:none">
            <a href="../Main/index.php?ad_orI">Check Out</a>
            </div>
            ';
        }
        ?>

    </div>


</div>

<script>
    function calculateTotal() {
        const productPrices = document.querySelectorAll(".product-price span");
        const numberInputs = document.querySelectorAll('.number-input');

        let total = 0;

        for (let i = 0; i < productPrices.length; i++) {

            const price = productPrices[i].textContent.slice(1);
            const priceWithoutDollarSign = parseFloat(price.replace("$", ""));
            const quantity = parseInt(numberInputs[i].value);

            const productTotal = priceWithoutDollarSign * quantity;

            total += productTotal;
        }

        document.getElementById("totalPrice").innerHTML = `Total: ${total.toFixed(2)}`;
        document.getElementById("totalPrice").value = total.toFixed(2);
    }

    calculateTotal();

    const quantityInputs = document.querySelectorAll(".number-input");

    quantityInputs.forEach(input => {
        input.addEventListener("change", () => {
            calculateTotal();
        });
    });

    setTimeout(function() {
        document.getElementById("myButton").style.display = "block";
    }, 1000);
</script>