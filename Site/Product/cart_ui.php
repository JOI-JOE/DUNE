<style>
    h1 {
        margin: 0;
    }

    main {
        padding: 20px;
    }

    .cart {
        border: 1px solid #ccc;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .cart h2 {
        margin-top: 0;
        border-bottom: 1px solid #ccc;
        padding-bottom: 10px;
    }

    .cart ul {
        list-style: none;
        padding: 0;
    }

    .cart li {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
        transition: all 0.3s ease;
    }

    .product-details {
        display: flex;
        align-items: center;
    }

    .product-details img {
        width: 50px;
        /* margin-right: 20px; */
        border-radius: 5px;
    }

    .info {
        display: flex;
        /* gap: 3rem; */
        align-items: center;
        justify-content: space-between;
    }

    .info h3 {
        margin: 0;
        font-size: 1.2em;
        margin-right: 50px;
        width: 400px;
    }

    .info p {
        margin: 5px 0;
        color: #666;
    }

    .price {
        font-size: 1.2em;
    }

    .quantity-container {
        display: flex;
        align-items: center;
        margin-left: 50px
    }

    .quantitybutton {
        background-color: #000;
        color: #fff;
        border: none;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        font-size: 1em;
        margin: 0 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .quantitybutton:hover {
        background-color: #333;
    }

    .quantity-value {
        font-size: 1.1em;
        margin: 0 5px;
    }

    .remove {
        background-color: #ff5c5c;
        color: #fff;
        padding: 8px 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .remove :hover {
        background-color: #e04848;
    }

    .total {
        margin-top: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .checkout,
    .checkout-main {
        background-color: #000;
        color: #fff;
        padding: 12px 24px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .checkout:hover {
        background-color: #333;
    }

    .button-check {
        background-color: var(--color-dark);
        padding: 20px;
        border-radius: var(--border-radius-1);
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 4rem;
        ;
    }

    .checkout-main {
        background: #1976d2;
    }
</style>
<section class="cart container">
    <main>
        <section class="cart ">
            <h2>Your Shopping Cart</h2>
            <ul>
                <form action="cart.php" method="POST" autocomplete="off">
                    <?php
                    foreach ($list_cart as $ls) {
                        extract($ls);
                        echo
                        '
                    <li>
                        <input type="checkbox" name="ChooseAll[]">
                        <div class="product-details">
                            <img src="../../Content/Images/product/' . $img_product . '" alt="" style="margin-right:100px">
                            <div class="info">
                                <h3>' . $name_product . '</h3>
                                <p class="price">$' . $price . '</p>
                                <div class="quantity-container">
                                    <button class="quantitybutton" onclick="decrementQuantity(this)" autocomplete="off" >-</button>
                                    <span class="quantity-value" id="quantityValue">1</span>
                                    <button class="quantitybutton" onclick="incrementQuantity(this)" autocomplete="off">+</button>
                                </div>


                            </div>
                        </div>
                        <button class="remove">Remove</button>
                    </li>
                    ';
                    }
                    ?>


            </ul>
            <div class="button-check">
                <div class="bt-1">
                    <button class="checkout" id="select-all">Select All</button>
                    <button class="checkout" id="not-select">Deselect All</button>
                </div>
                <!-- LINK TO THE ORDER ITEM  -->
                <div class="bt-2">
                    <button class="checkout-main" name="btn-checkout">Checkout</button>
                </div>
            </div>
            </form>
        </section>
    </main>
</section>

<script>
    function incrementQuantity(button) {
        var quantityElement = button.parentElement.querySelector('.quantity-value');
        var currentQuantity = parseInt(quantityElement.textContent);
        quantityElement.textContent = currentQuantity + 1;

        document.getElementById('quantityValue').value = currentQuantity + 1;
    }

    function decrementQuantity(button) {
        var quantityElement = button.parentElement.querySelector('.quantity-value');
        var currentQuantity = parseInt(quantityElement.textContent);
        if (currentQuantity > 1) {
            quantityElement.textContent = currentQuantity - 1;

            document.getElementById('quantityValue').value = currentQuantity - 1;
        }
    }

    // Tìm tất cả các container
    var quantityContainers = document.querySelectorAll('.quantity-container');
    // Lặp qua từng container và thêm event listener
    for (var i = 0; i < quantityContainers.length; i++) {
        var container = quantityContainers[i];
        var decrementButton = container.querySelector('.quantitybutton:first-child');
        var incrementButton = container.querySelector('.quantitybutton:last-child');
    }


    const selectAllButton = document.querySelector("#select-all");
    const not_select = document.querySelector("#not-select");
    const checkboxes = document.querySelectorAll("input[name='ChooseAll[]']");

    function toggleCheckboxes(checkedState) {
        checkboxes.forEach((checkbox) => {
            checkbox.checked = checkedState;
        });
    }

    selectAllButton.addEventListener("click", () => {
        toggleCheckboxes(!selectAllButton.checked);
    });

    not_select.addEventListener("click", () => {
        toggleCheckboxes(selectAllButton.checked);
    });
</script>