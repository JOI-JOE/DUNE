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
        width: 100px;
        margin-right: 20px;
        border-radius: 5px;
    }

    .info {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .info h3 {
        margin: 0;
        font-size: 1.2em;
        margin-right: 50px;
    }

    .info p {
        margin: 5px 0;
        color: #666;
    }

    .price {
        font-size: 1.2em;
    }

    .quantity {
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

    .checkout {
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
</style>
<section class="cart container">
    <main>
        <section class="cart ">
            <h2>Your Shopping Cart</h2>
            <ul>
                <li>
                    <div class="product-details">
                        <img src="product1.jpg" alt="Product 1">
                        <div class="info">
                            <h3>Product 1</h3>
                            <p class="price">$100</p>
                            <div class="quantity">
                                <button class="quantitybutton" onclick="decrementQuantity(this)">-</button>
                                <span class="quantity-value">1</span>
                                <button class="quantitybutton" onclick="incrementQuantity(this)">+</button>
                            </div>
                        </div>
                    </div>
                    <button class="remove">Remove</button>
                </li>
                <!-- Additional items would go here -->
            </ul>
            <div class="total">
                <p>Total: $100</p>
                <button class="checkout">Checkout</button>
            </div>
        </section>
    </main>
</section>

<script>
    function incrementQuantity(button) {
        var quantityElement = button.parentElement.querySelector('.quantity-value');
        var currentQuantity = parseInt(quantityElement.textContent);
        quantityElement.textContent = currentQuantity + 1;
    }

    function decrementQuantity(button) {
        var quantityElement = button.parentElement.querySelector('.quantity-value');
        var currentQuantity = parseInt(quantityElement.textContent);
        if (currentQuantity > 1) {
            quantityElement.textContent = currentQuantity - 1;
        }
    }
</script>