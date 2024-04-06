<style>
    span,
    input {
        color: black;
    }

    #totalPrice {
        color: black;
        font-size: 30px;
    }

    a {
        color: #000000;
    }
</style>
<div class="box container">
    <ul>

        <!-- <form action="../Main/index.php?ad_orI" method="post"> -->
        <!-- <form action="../Product/check_last_ui.php" method="post"> -->
        <?php
        $button
        ?>

        <form action="../Main/index.php?ad_orI" method="POST">
            <?php
            $_SESSION['list_cart'] = $list_cart;
            foreach ($list_cart as $ls) {
                extract($ls);
            ?>
                <li>
                    <div class="checkout-items">
                        <div class="product" id="product_cart">
                            <img src="../../Content/Images/product/<?= $img_product ?>">
                            <div class="product-details">
                                <a href=" ../Main/index.php?id_product=<?= $id_product ?>">
                                    <div class=" product-title"><?= $name_product ?>
                                </a>
                            </div>
                            <div class="product-price">
                                <span> $<?= $price ?></span>
                            </div>
                            <div class="quantity">
                                <ul>
                                    <li>
                                        <span>Quantity: </span>
                                        <input type="number" class="number-input" name="quantities[]" min="1" value="<?= $quantity ?>">
                                    </li>
                                    <li>
                                        <span>Size : <?= $size ?> </span>
                                    </li>

                                </ul>
                                <a href="../Main/index.php?del_cart=<?= $id_cart ?>">
                                    <span class="remove" name="remove">Remove</span>
                                </a>

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
    <div class="infor"></div>
    <p id="totalPrice" style="margin:2rem 0;">$0.00</p>
    <hr>

    <p style="margin:20px 0">Estimated Delivery & Handling: <span>Free</span></p>
    <input type="submit" class="checkout-main" name="btn_checkout" <?= empty($id_cart) ? 'disabled  style="opacity:0.2 ;"' : "" ?> value="Buy Now">
    </form>




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