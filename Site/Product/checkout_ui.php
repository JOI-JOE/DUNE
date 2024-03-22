<div class="box container">


    <ul>
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
                                        <button class="increase-button button">+</button>
                                        <input type="number" class="number-input" value="1" disabled>
                                        <button class="decrease-button button">-</button>
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
                                    <span class="remove">Remove</span>
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
        <p id="totalPrice" style="margin:2rem 0;">$0.00</p>
        <a href="">
            <input type="submit" class=" checkout-main" name="btn-checkout" <?= empty($id_cart)  ? "disabled style='opacity: 0.5;'" : "" ?> value="Buy Now">
        </a>
    </div>

</div>

<script>
    const increaseButtons = document.querySelectorAll('.increase-button');
    const decreaseButtons = document.querySelectorAll('.decrease-button');
    const numberInputs = document.querySelectorAll('.number-input');

    // Initial value
    let numbers = Array(numberInputs.length).fill(1);

    // Update display based on current number
    for (let i = 0; i < numberInputs.length; i++) {
        numberInputs[i].value = numbers[i];
    }

    // Function to increment the number
    function increaseNumber(event) {
        const index = event.target.dataset.index;
        numbers[index]++;
        numberInputs[index].value = numbers[index];
    }

    // Function to decrement the number (with optional minimum value handling)
    function decreaseNumber(event) {
        const index = event.target.dataset.index;
        numbers[index] = Math.max(numbers[index] - 1, 1);
        numberInputs[index].value = numbers[index];
    }

    // Add click event listeners to buttons
    for (let i = 0; i < increaseButtons.length; i++) {
        increaseButtons[i].addEventListener('click', increaseNumber);
        increaseButtons[i].dataset.index = i;
    }

    for (let i = 0; i < decreaseButtons.length; i++) {
        decreaseButtons[i].addEventListener('click', decreaseNumber);
        decreaseButtons[i].dataset.index = i;
    }
</script>